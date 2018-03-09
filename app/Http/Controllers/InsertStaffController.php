<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Staff;
use App\User;
use Auth;

class InsertStaffController extends Controller
{
    	public function insertform() {
      return view('insert_stf') ;
   }
    public function insert(Request $request) {
   	$var = new Staff;
   	$var->user_id = Auth::user()->id;
    $var->title = $request->title;
    $var->first_name = Auth::user()->first_name;
  $var->middle_name = Auth::user()->middle_name;
  $var->last_name = Auth::user()->last_name;
  $var->email = Auth::user()->email;
	$var->country = Auth::user()->country;
  $var->phone = $request->phone;
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
  $var->buddy = $request->buddy;
  $var->facebook = $request->facebook;
  $var->line = $request->line;
  $var->hobby = $request->hobby;
  $var->interests = $request->interests;
	$var->save();

  return redirect('/home');
   }

   public  function getInsertStf(){
        return view('insert_stf');
    }
    public function viewuserid(){
        $users = DB::table('users')->get();

        return view('insert_stf', ['users' => $users]);

   }
}
