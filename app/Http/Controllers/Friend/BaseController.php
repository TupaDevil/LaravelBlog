<?php

namespace App\Http\Controllers\Friend;
use App\Http\Controllers\Controller;

use App\Services\Friend\Service;
use Illuminate\Http\Request;


class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service){
        $this->service = $service;
    }
}

