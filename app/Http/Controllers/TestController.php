<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    public function index(){
        // return "Hello ini respone dari controller index()"
        return view('test');
    }
}
