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
	$var->std_id = $request->std_id;
	$var->country = $request->country;
	$var->birthday = $request->birthday;
	$var->study_date = $request->study_date;
	$var->section = $request->section;
	$var->activity_hour = $request->activity_hour;
	$var->graduate = $request->graduate;
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
