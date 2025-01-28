<?php

namespace App\Http\Controllers\Friend;
use App\Http\Controllers\Controller;
use App\Models\friend;

class DeleteController extends Controller
{

    public function __invoke(Friend $friend){
        $friend->delete();
        return redirect()->route('friend.index');
    }

}








