<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Member;
use App\Staff;
use App\Student;
use Auth;

class DataUserController extends Controller
{
    public  function getMyData(){
        return view('my_data');
    }
    public function getData(){
   	$members = DB::table('members')->where('user_id' , Auth::user()->id )->get();
   	//$staffs = DB::table('staff')->where('member_id' , $members->id )->get();
   //	$student = DB::table('students')->where('member_id' , $members->id )->get();
   	return view('my_data', ['member' => $members]);
   }
}
