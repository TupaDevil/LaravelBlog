<?php

namespace App\Http\Controllers\Friend;
use App\Http\Controllers\Controller;
use App\Models\friend;

class UpdateController extends Controller
{

    public function __invoke(Friend $friend) {
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

}








