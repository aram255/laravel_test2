<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function method(){
    	
    	// dd(route('asssss',1));

    	return view('header');
    }


    public function index()
    {
    	return view('index');
    }


    
}
