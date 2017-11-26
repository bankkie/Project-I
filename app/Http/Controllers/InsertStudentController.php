<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class InsertStudentController extends Controller
{
      public function insertform() {
      return view('insert_std') ;
   }
    public function insert(Request $request) {
       	$var = new Student;
   	$var->user_id = $request->user_id;
    $var->title = $request->title;
    $var->first_name = $request->first_name;
  $var->middle_name = $request->middle_name;
  $var->last_name = $request->last_name;
  $var->email = $request->email;
  $var->country = $request->country;
  $var->exp_passport = $request->exp_pass;
  $var->exp_visa = $request->exp_visa;
  $var->exp_wp = $request->exp_wp;
  $var->remarks = $request->remarks;
  $var->photo_add = $request->photo_add;
  $var->std_id = $request->std_id;
	$var->birthday = $request->birthday;
	$var->study_date = $request->study_date;
  $var->category = $request->category;
  $var->faculty = $request->faculty;
	$var->section = $request->section;
	$var->activity_hour = $request->activity_hour;
	$var->save();
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/">Click Here</a> to go back.';
   }
      public  function getInsertStd(){
        return view('insert_std');
    }
    public function viewuserid(){
        $users = DB::table('members')->get();

        return view('insert_std', ['users' => $users]);

   }
}
