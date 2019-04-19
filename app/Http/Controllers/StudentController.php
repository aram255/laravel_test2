<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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


    // public function index()
    // {
    // 	// $data = DB::table('students')
    // 	// ->join('subjects','students.id','subjects.subject_id')
    // 	// ->join('teachers','subjects.id','teachers.subjects_id')
    // 	// ->select('students.*','subjects.subjects','teachers.name as TeacherName')
    // 	// ->get();
    // 	// echo '<pre>';
    // 	// var_dump($data);
    //    return view('dummy');
    // }

    public function alldata()
    {
    	return view('dummy');
    }


    
}
