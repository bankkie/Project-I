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

        $members=Member::all();
        return view('all_data',compact('members'));
    }
    public  function getShowStatisticData(){
        return view('statistic_data');
    }
    public function countAll(){
   	$vars = DB::table('users')->select(DB::raw('count(id) as user_count,country'))->groupBy('country')->get();
   	$foos = DB::table('users')->select(DB::raw('count(id) as user_count,Status'))->groupBy('Status')->get();
   	$users = DB::table('users')->get();
   	//$this->viewuserid();
   	return view('all_data',compact('users','vars','foos') );
   }
   public function countStatistic(){
   	$memcous = DB::table('users')->select(DB::raw('count(id) as user_count,country'))->groupBy('country')->get();
   	$memstts = DB::table('users')->select(DB::raw('count(id) as user_count,status'))->groupBy('status')->get();

   	$stfcous = DB::table('staff')->select(DB::raw('count(id) as user_count,country'))->groupBy('country')->get();
   	$stffacs = DB::table('staff')->select(DB::raw('count(id) as user_count,faculty'))->groupBy('faculty')->get();

   	$fhts = DB::table('students')  ->select(DB::raw('count(id) as user_count, category'))
                        ->where('faculty', 'FHT')
                        ->groupBy('category')
                        ->get();

    $fiss = DB::table('students')  ->select(DB::raw('count(id) as user_count, category'))
                        ->where('faculty', 'FIS')
                        ->groupBy('category')
                        ->get();

    $fiss = DB::table('students')  ->select(DB::raw('count(id) as user_count, category'))
                        ->where('faculty', 'FIS')
                        ->groupBy('category')
                        ->get();
    $ftes = DB::table('students')  ->select(DB::raw('count(id) as user_count, category'))
                        ->where('faculty', 'FTE')
                        ->groupBy('category')
                        ->get();

    $coes = DB::table('students')  ->select(DB::raw('count(id) as user_count, category'))
                        ->where('faculty', 'CoE')
                        ->groupBy('category')
                        ->get();

    $essands = DB::table('students')  ->select(DB::raw('count(id) as user_count, category'))
                        ->where('faculty', 'ESSAND')
                        ->groupBy('category')
                        ->get();


   	$stdcats = DB::table('students')->select(DB::raw('count(id) as user_count,category'))->groupBy('category')->get();
   	$stdcous = DB::table('students')->select(DB::raw('count(id) as user_count,country'))->groupBy('country')->get();
   	$vars = DB::table('users')->select(DB::raw('count(id) as user_count,country'))->groupBy('country')->get();
   	//$this->viewuserid();
   	return view('statistic_data',compact('memstts','memcous','stfcous','stffacs','stdcous','stdcats','stdfacs','vars','fhts','fiss','ftes','coes','essands') );
   }


  

    





}
