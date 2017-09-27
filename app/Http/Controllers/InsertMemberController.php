<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Member;

class InsertMemberController extends Controller
{
    public function insertform() {
      return view('insert_mem') ;
   }
    public function insert(Request $request) {
    $var = new Member;
	$var->title = $request->title;
	$var->user_id = $request->user_id;
	$var->exp_passport = $request->exp_pass;
	$var->exp_visa = $request->exp_visa;
	$var->phone = $request->phone;
	$var->remarks = $request->remarks;
	$var->hobby = $request->hobby;
	$var->Status = $request->Status;
	$var->country = $request->country;
  $var->name = $request->name;
  $var->email = $request->email;
	$var->save();
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/">Click Here</a> to go back.';
   }

   public  function getInsertMem(){
        return view('insert_mem');
    }
   public function viewuserid(){
        $users = DB::table('users')->get();
        return view('insert_mem', ['users' => $users]);

   }
}
