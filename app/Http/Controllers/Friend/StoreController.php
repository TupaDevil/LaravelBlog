<?php

namespace App\Http\Controllers\Friend;
use App\Http\Controllers\Friend\BaseController;
use App\Http\Requests\Friend\StoreRequest;
use App\Models\Friend;

class StoreController extends BaseController
{

    public function __invoke(StoreRequest $request){
        $data = $request->validated(); 
        $this -> service ->store($data);

        return redirect()->route('friend.index');
    }

}








