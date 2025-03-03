<?php

namespace App\Http\Controllers\Friend;
use App\Http\Controllers\Controller;
use App\Models\Friend;
use App\Models\Weapon;
use App\Models\Sex;
use App\Models\Perk;

class ShowController extends Controller
{

    public function __invoke(Friend $friend){
        $weapons = Weapon::all();
        $sexes = Sex::all();

        $perks = Perk::all();
        return view('friends.show', compact('friend', 'weapons', 'sexes', 'perks'));
    }

}








