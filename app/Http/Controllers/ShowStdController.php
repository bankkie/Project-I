<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Member;
use App\User;
use App\Staff;
use App\Student;

class ShowStdController extends Controller
{
    public  function getShowStd(){
        return view('all_std');
    }
    
    public function countAll(){
    $vars = DB::table('students')->select(DB::raw('count(id) as user_count,country'))->groupBy('country')->get();
    $foos = DB::table('students')->select(DB::raw('count(id) as user_count,faculty'))->groupBy('faculty')->get();
    $users = DB::table('students')->get();
    //$this->viewuserid();
    return view('all_std',compact('users','vars','foos') );
   }
   
}
