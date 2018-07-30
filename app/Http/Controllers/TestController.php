<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //definimos un metodo//
    public function welcome()
    {
    	return view('welcome');
    }
}
