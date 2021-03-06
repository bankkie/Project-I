<?php

namespace App\Http\Controllers;


use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Volunteer;
use Illuminate\Http\Request;

class InsertVolunteerController extends Controller
{
    public function insertform() {
      return view('insert_vol') ;
   }
   public function insert(Request $request) {
    $var = new Volunteer;

	$var->std_id = $request->std_id;
	$var->name = $request->name;
	$var->nickname = $request->nickname;
	$var->email = $request->email;
	$var->facebook = $request->facebook;
  $var->phone = $request->phone;
	$var->reason = $request->reason;
	$var->remarks = $request->remarks;
	
	$var->save();
      return redirect('ShowVol');
   }
   public  function getInsertVol(){
        return view('insert_vol');
    }

}
