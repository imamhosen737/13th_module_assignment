<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function helloWorld()
    {
        return view('hello_world');
    }
}
