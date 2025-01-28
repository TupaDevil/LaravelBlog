<?php

namespace App\Http\Controllers\Friend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Weapon;
use App\Models\Perk;
use App\Models\sex;

class CreateController extends Controller
{

    public function __invoke(){
        $weapons = Weapon::all(); // Для выпадающего выбора из урока 20
        $sexes = Sex::all(); // Для выпадающего выбора из урока 20

        $perks = Perk::all();
        return view('friends.create', compact('weapons', 'sexes', 'perks',));
    }

}








