<?php

namespace App\Http\Controllers\Friend;
use App\Http\Controllers\Controller;
use App\Models\friend;

class StoreController extends Controller
{

    public function __invoke(){
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

}








