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
	
	$var->user_id = $request->user_id;
  $var->title = $request->title;
  $var->first_name = $request->first_name;
  $var->middle_name = $request->middle_name;
  $var->last_name = $request->last_name;
	$var->Status = $request->status;
	$var->country = $request->country;
  
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
