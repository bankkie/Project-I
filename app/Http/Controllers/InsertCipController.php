<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cip;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class InsertCipController extends Controller
{
    public function insertform() {
      return view('insert_cip') ;
   }
    public function insert(Request $request) {
   	$var = new Cip;
   	$var->user_id = $request->user_id;
	$var->birthday = $request->birthday;
	$var->begin_date = $request->begin_date;
	$var->exp_wp = $request->exp_wp;
	$var->status = $request->status;
	$var->save();
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/">Click Here</a> to go back.';
   }

   public  function getInsertCip(){
        return view('insert_cip');
    }
    public function viewuserid(){
        $users = DB::table('members')->get();

        return view('insert_cip', ['users' => $users]);

   }
}
