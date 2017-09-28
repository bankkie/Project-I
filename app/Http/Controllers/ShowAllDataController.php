<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Member;
use App\User;
use App\Staff;
use App\Student;

class ShowAllDataController extends Controller
{
    public  function getShowAllData(){
        return view('all_data');
    }
    public  function getShowStatisticData(){
        return view('statistic_data');
    }
    public function countAll(){
   	$vars = DB::table('members')->select(DB::raw('count(id) as user_count,country'))->groupBy('country')->get();
   	$foos = DB::table('members')->select(DB::raw('count(id) as user_count,Status'))->groupBy('Status')->get();
   	$users = DB::table('members')->get();
   	//$this->viewuserid();
   	return view('all_data',compact('users','vars','foos') );
   }
   public function countStatistic(){
   	$memcous = DB::table('members')->select(DB::raw('count(id) as user_count,country'))->groupBy('country')->get();
   	$memstts = DB::table('members')->select(DB::raw('count(id) as user_count,Status'))->groupBy('Status')->get();

   	$stfcous = DB::table('staff')->select(DB::raw('count(id) as user_count,country'))->groupBy('country')->get();
   	$stffacs = DB::table('staff')->select(DB::raw('count(id) as user_count,faculty'))->groupBy('faculty')->get();

   	$stdfacs = DB::table('students')->select(DB::raw('count(id) as user_count,faculty'))->groupBy('faculty')->get();
   	$stdcats = DB::table('students')->select(DB::raw('count(id) as user_count,category'))->groupBy('category')->get();
   	$stdcous = DB::table('students')->select(DB::raw('count(id) as user_count,country'))->groupBy('country')->get();
   	$vars = DB::table('members')->select(DB::raw('count(id) as user_count,country'))->groupBy('country')->get();
   	//$this->viewuserid();
   	return view('statistic_data',compact('memstts','memcous','stfcous','stffacs','stdcous','stdcats','stdfacs','vars') );
   }
}
