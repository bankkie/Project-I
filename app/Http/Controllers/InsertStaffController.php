<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Staff;

class InsertStaffController extends Controller
{
    	public function insertform() {
      return view('insert_stf') ;
   }
    public function insert(Request $request) {
   	$var = new Staff;
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
 
	$var->ss_card = $request->ss_card;
	$var->tax_no = $request->tax_no;
  $var->birthday = $request->birthday;
	$var->ext = $request->ext;
	$var->faculty = $request->faculty;
	$var->begin_date = $request->begin_date;
  $var->status = $request->status;
	$var->save();
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/">Click Here</a> to go back.';
   }

   public  function getInsertStf(){
        return view('insert_stf');
    }
    public function viewuserid(){
        $users = DB::table('members')->get();

        return view('insert_stf', ['users' => $users]);

   }
}
