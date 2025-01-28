<?php

namespace App\Http\Controllers\Friend;
use App\Http\Controllers\Controller;
use App\Models\friend;

class IndexController extends Controller
{

    public function __invoke(){
        $friends = Friend::all();
        return view('friends.index', compact('friends'));
    }

}








