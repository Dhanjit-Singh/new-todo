<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function Pyramid(){
        return view('test.pyramid');
    }
}
