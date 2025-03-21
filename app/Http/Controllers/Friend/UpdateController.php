<?php

namespace App\Http\Controllers\Friend;
use App\Http\Controllers\Friend\BaseController;
use App\Http\Requests\Friend\UpdateRequest;
use App\Models\friend;

class UpdateController extends BaseController
{

    public function __invoke(UpdateRequest $request, Friend $friend) {
        $data = $request->validated(); 

        $this -> service ->update($friend, $data);
    
        return redirect()->route('friend.show', $friend);
    }

}








