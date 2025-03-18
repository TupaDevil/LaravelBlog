<?php

namespace App\Http\Controllers\Friend;
use App\Http\Controllers\Controller;
use App\Http\Requests\Friend\UpdateRequest;
use App\Models\friend;

class UpdateController extends Controller
{

    public function __invoke(UpdateRequest $request,Friend $friend) {
        $data = $request->validated(); 
        $perks = $data['perks'];
        unset($data['perks']);
        
        $friend -> update($data);
        $friend->perks()->sync($perks);

        return redirect()->route('friend.show', $friend);
    }

}








