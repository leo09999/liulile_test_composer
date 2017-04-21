<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use liulile;

class testController extends Controller
{
    //
    public function index(){

        $obj = new \test();
        $obj->index();
    }
}
