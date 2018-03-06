<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;


class AddMemberController extends Controller
{
    
    public function insertform() {
      return view('insert_mem') ;
   }
    public function insert(Request $request) {
    $var = new User;
	
	$var->id = $request->id;
  $var->title = $request->title;
  $var->first_name = $request->first_name;
  $var->middle_name = $request->middle_name;
  $var->last_name = $request->last_name;

	$var->country = $request->country;
  
	$var->save();
      return back();
   }

   public  function getInsertMem(){
        return view('insert_mem');
    }
   public function viewuserid(){
        $users = DB::table('users')->get();
        return view('insert_mem', ['users' => $users]);

   }
}
