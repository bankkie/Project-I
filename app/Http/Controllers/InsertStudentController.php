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
   	$var->member_id = $request->member_id;
	$var->std_id = $request->std_id;
	$var->country = $request->country;
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
