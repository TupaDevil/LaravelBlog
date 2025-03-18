<?php

namespace App\Http\Controllers\Friend;
use App\Http\Controllers\Controller;
use App\Http\Requests\Friend\StoreRequest;
use App\Models\friend;

class StoreController extends Controller
{

    public function __invoke(StoreRequest $request){
        $data = $request->validated(); 
        $perks = $data['perks'] ?? []; // [1, 2, 3] или пустой массив
        unset($data['perks']);
        
        $friend = Friend::create($data);
        $friend->perks()->attach($perks, ['created_at' => now()]);


        return redirect()->route('friend.index');
        /* return view('friends.store'); */
    }

}








