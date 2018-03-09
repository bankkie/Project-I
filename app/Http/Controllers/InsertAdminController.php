<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Admin;

class InsertAdminController extends Controller
{
	public function insertform() {
      return view('insert_admin') ;
   }
    public function insert(Request $request) {
    $var = new Admin;
  $var->user_id = Auth::user()->id;
  $var->title = $request->title;
  $var->first_name = Auth::user()->first_name;
  $var->middle_name = Auth::user()->middle_name;
  $var->last_name = Auth::user()->last_name;
  $var->email = Auth::user()->email;
	$var->faculty = $request->faculty;
	
  
	$var->save();
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/">Click Here</a> to go back.';
   }

   public  function getInsertAd(){
        return view('insert_admin');
    }
   public function viewuserid(){
        $users = DB::table('users')->get();
        return view('insert_admin', ['users' => $users]);

   }
    //
}
