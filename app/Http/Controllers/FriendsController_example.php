<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friend;
use App\Models\Weapon;
use App\Models\sex;
use App\Models\Perk;
use App\Models\Normis;
use App\Models\CreateNormisWeapon;
use App\Models\CreateFriendPerk;

class FriendsController_example extends Controller
{
    public function index()
    {
        $friends = Friend::all();
        return view('friends.index', compact('friends'));
        
    }

    public function createDummies()
    {
        $friendsArr = [
            [
                'name' => 'Yan',
                'nick_name' => 'Yanello',
                'age' => '20',
                'alive' => '1',
                'prefered_weapon' => 'various',
            ],
            [
                'name' => 'Oleg',
                'nick_name' => 'Ayleh',
                'age' => '18',
                'alive' => '1',
                'prefered_weapon' => 'fist',
            ],
            [
                'name' => 'cat',
                'nick_name' => 'meow',
                'age' => '17',
                'alive' => '1',
                'prefered_weapon' => 'sword',
            ],
            [
                'name' => 'ilya',
                'nick_name' => 'iltention',
                'age' => '17',
                'alive' => '1',
                'prefered_weapon' => 'pistol',
            ],
            [
                'name' => 'satan',
                'nick_name' => 'femboy',
                'age' => '42',
                'alive' => '1',
                'prefered_weapon' => 'curse',
            ],
        ];


        foreach ($friendsArr as $item) {
            dump($item);
            Friend::create($item);
        }


        $weaponsArr = [
            [
                'weapon_name' => 'm4a1',
            ],
            [
                'weapon_name' => 'ak-47',
            ],
            [
                'weapon_name' => 'two_handed_sword',
            ],
            [
                'weapon_name' => 'glock-18',
            ],
            [
                'weapon_name' => 'book_of_curses',
            ],
        ];

        foreach ($weaponsArr as $item) {
            dump($item);
            Weapon::create($item);
        }

        $sexArr = [
            [
                'sex' => 'sex_1',
            ],
            [
                'sex' => 'sex_2',
            ],
            [
                'sex' => 'sex_3',
            ],
            [
                'sex' => 'sex_4',
            ],
            [
                'sex' => 'sex_5',
            ],
        ];

        foreach ($sexArr as $item) {
            dump($item);
            sex::create($item);
        }

        /* относятся многие ко многим поэтому достаточно 3 штук */
        $perkArr = [
            [
                'perk' => 'kind',
            ],
            [
                'perk' => 'fun',
            ],
            [
                'perk' => 'nigga',
            ],
        ];

        foreach ($perkArr as $item) {
            dump($item);
            Perk::create($item);
        }

        $NormisArr = [
            [
                'normis' => 'Vlad',
            ],
            [
                'normis' => 'Boris',
            ],
            [
                'normis' => 'Hitler',
            ],
            [
                'normis' => 'Gore',
            ],
            [
                'normis' => 'Ahmed',
            ],
        ];

        foreach ($NormisArr as $item) {
            dump($item);
            Normis::create($item);
        }

        $NormisWeaponArr = [
            [
                'normis_id' => '1','weapon_id' => '1',
            ],
            [
                'normis_id' => '1','weapon_id' => '2',
            ],
            [
                'normis_id' => '1','weapon_id' => '3',
            ],
            [
                'normis_id' => '2', 'weapon_id' => '5',
            ],
            [
                'normis_id' => '2','weapon_id' => '4',
            ],
            [
                'normis_id' => '3','weapon_id' => '3',
            ],
            [
                'normis_id' => '4','weapon_id' => '1',
            ],
            [
                'normis_id' => '4','weapon_id' => '4',
            ],
            [
                'normis_id' => '5','weapon_id' => '2',
            ],
            [
                'normis_id' => '5','weapon_id' => '3',
            ],
        ];

        foreach ($NormisWeaponArr as $item) {
            dump($item);
            CreateNormisWeapon::create($item);
        }

        $FriendPerkArr = [
            [
                'friend_id' => '1','perk_id' => '1',
            ],
            [
                'friend_id' => '1','perk_id' => '2',
            ],
            [
                'friend_id' => '1','perk_id' => '3',
            ],
            [
                'friend_id' => '2', 'perk_id' => '3',
            ],
            [
                'friend_id' => '2','perk_id' => '1',
            ],
            [
                'friend_id' => '3','perk_id' => '3',
            ],
            [
                'friend_id' => '4','perk_id' => '1',
            ],
            [
                'friend_id' => '4','perk_id' => '2',
            ],
            [
                'friend_id' => '5','perk_id' => '2',
            ],
            [
                'friend_id' => '5','perk_id' => '3',
            ],
        ];

        foreach ($FriendPerkArr as $item) {
            dump($item);
            CreateFriendPerk::create($item);
        }


        dd('created');
    }


    public function update()
    {
        $friend = Friend::find(4);
        $friend->update([
            'name' => 'updated',
            'nick_name' => 'updated',
            'age' => '111',
            'alive' => '1',
            'prefered_weapon' => 'updated',
        ]);
    }

    public function delete()
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








