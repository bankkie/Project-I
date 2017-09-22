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
	$var->country = $request->country;
	$var->exp_wp = $request->exp_wp;
	$var->ss_card = $request->ss_card;
	$var->tax_no = $request->tax_no;
	$var->ext = $request->ext;
	$var->faculty = $request->faculty;
	$var->begin_date = $request->begin_date;
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
