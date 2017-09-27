<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Member;
use App\User;

class ShowAllDataController extends Controller
{
    public  function getShowAllData(){
        return view('all_data');
    }
    public function countStatus(){
   	$vars = DB::table('users')->get();
   	$users = DB::table('members')->get();
   	//$this->viewuserid();
   	return view('all_data', ['vars' => $vars], ['users' => $users]);
   }
}
