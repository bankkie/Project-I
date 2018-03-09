<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Student;
use App\Staff;
use Illuminate\Support\Facades\Input;
use DB;


class BuddyController extends Controller
{
    public  function getBuddy(){
    $students = DB::table('students')->where('buddy','Yes')->get();

   	//$this->viewuserid();
   	return view('buddy',compact('students') );
   }
}