<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Staff;
use App\Student;
use Auth;

class DataUserController extends Controller
{
    public  function getMyData(){
        return view('my_data');
    }
    public function getData(){
    	 if (Auth::user()->Status == 'Staff') {
    	 	$members = DB::table('staff')->where('user_id' , Auth::user()->id )->get();
    	 }
    	 else if (Auth::user()->Status == 'Student') {
    	 	$members = DB::table('students')->where('user_id' , Auth::user()->id )->get();
    	 }
    	 else if (Auth::user()->Status == 'Admin') {
    	 	$members = DB::table('users')->where('id' , Auth::user()->id )->get();
    	 }
    	 else if (Auth::user()->Status == 'Volunteer') {
    	 	$members = DB::table('volunteers')->where('user_id' , Auth::user()->id )->get();
    	 }
        
   	//$members = DB::table('users')->where('user_id' , Auth::user()->id )->get();
   	//$staffs = DB::table('staff')->where('member_id' , $members->id )->get();
   //	$student = DB::table('students')->where('member_id' , $members->id )->get();
   	// return view('my_data', ['member' => $members]);
    return view('my_data',compact('members') );
   }
}