<?php

namespace App\Http\Controllers;

use App\Models\FriendPerk;
use Illuminate\Http\Request;
use App\Models\Friend;
use App\Models\Weapon;
use App\Models\Sex;
use App\Models\Perk;
use App\Models\Normis;

class FriendsController extends Controller
{
    public function index()
    {

        //$weapons = Weapon::find(1); // Нужен для 1 и 2 варианта 
        //$friend = Friend::find(4); // Нужен ваще для всего
        //$sex = Sex::find(3);
        

        // Первый вариант который выкидывает всех у кого weapon_id = 1
        /*  $friends = Friend::where('weapon_id', $weapons->id)->get();
        dd($friends); */

        // dd($weapons->friends); // ВР 2. friends - обращение к функции в модели Friend
        // dd($friend->weapon); // ВР 2. только обращение идёт к функции weapon в модели Weapon
        // dd($sex->friends); // Нужен для один ко многим / мой тест

        //$perk = Perk::find(1);
        //dd($perk->friends);  // Нужен для многие ко многим
        //dd($friend->perks);  // Нужен для многие ко многим

        /* Моя тренировка по многие ко многим */

        //$weapons = Weapon::find(3);
        //$normis = Normis::find(1);
        //dd($weapons->normis);
        //dd($normis->weapons);

        $friend = Friend::find(1);
        dd($friend->perks);

        $Perks = Perk::find(1);
        dd($Perks->friends);

        $weapons = Weapon::find(1);
        dd($weapons->friends);

        $friends = Friend::all();
        return view('friends.index', compact('friends'));
    }

    public function create()
    {
        $weapons = Weapon::all(); // Для выпадающего выбора из урока 20
        $sexes = Sex::all(); // Для выпадающего выбора из урока 20

        $perks = Perk::all();
        return view('friends.create', compact('weapons', 'sexes', 'perks',));
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|string',
            'nick_name' => 'required|string',
            'age' => 'integer',
            'alive' => 'integer',
            'prefered_weapon' => 'string',
            'weapon_id' => '',
            'sex_id' => '',
            'perks' => '',
        ]); 
        $perks = $data['perks'];
        unset($data['perks']);
        
        $friend = Friend::create($data);
        
        /* $friend->perks()->attach($perks); */ // Вариант 1. Вариант ниже добавляет время
        $friend->perks()->attach($perks, ['created_at' => new \DateTime('now')]);


        return redirect()->route('friend.index');
        /* return view('friends.store'); */
    }

    public function show(Friend $friend)
    {
        return view('friends.show', compact('friend'));
    }

    public function edit(Friend $friend)
    {
        $weapons = Weapon::all();
        $sexes = Sex::all();

        $perks = Perk::all();
        return view('friends.edit', compact('friend', 'weapons', 'sexes', 'perks'));
    }

    public function update(Friend $friend)
    {
        $data = request()->validate([
            'name' => 'string',
            'nick_name' => 'string',
            'age' => 'integer',
            'alive' => 'integer',
            'prefered_weapon' => 'string',
            'weapon_id' => '',
            'sex_id' => '',
            'perks' => '',
        ]); 
        
        $perks = $data['perks'];
        unset($data['perks']);
        
        $friend -> update($data);
        $friend->perks()->sync($perks);

        return redirect()->route('friend.show', $friend);
    }

    public function delete(Friend $friend)
    {
        $friend->delete();
        return redirect()->route('friend.index');
    }

    public function update2()
    {
        $friend = Friend::findOrFail(4);
        $friend->update([
            'name' => 'updated',
            'nick_name' => 'updated',
            'age' => '111',
            'alive' => '1',
            'prefered_weapon' => 'updated',
        ]);
    }

    public function delete2()
    {
        $friend = Friend::find(2);
        $friend->delete();
        dd('deeleted');
    }

    public function firstOrCreate()
    {

        $GOIDA = [
            'name' => 'GOIDA',
            'nick_name' => 'GOIDA',
            'age' => '228',
            'alive' => '1',
            'prefered_weapon' => 'GOIDA',
        ];

        $friend = Friend::firstOrCreate( 
            [
                'name' => "GOIDA"
            ],
            [
                'name' => 'GOIDA',
                'nick_name' => 'GOIDA',
                'age' => '228',
                'alive' => '1',
                'prefered_weapon' => 'GOIDA',
            ]
        );
        dump($friend->nick_name);
        dd('end');
    }

    public function updateOrCreate()
    {

        $GOIDA = [
            'name' => 'GOIDA',
            'nick_name' => 'GOIDA',
            'age' => '228',
            'alive' => '1',
            'prefered_weapon' => 'GOIDA',
        ];

        $friend = Friend::updateOrCreate( 
            [
                'name' => "Oleg"
            ],
            [
            'name' => 'GOIDA',
            'nick_name' => 'GOIDA',
            'age' => '228',
            'alive' => '1',
            'prefered_weapon' => 'GOIDA',
            ]
        );
        dump($friend->nick_name);
        dd('end');
    }


}








