<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use Session;
use DB;
use App\User;
use App\Volunteer;
use App\Student;
use App\Staff;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    
    public function searchstd(request $request)
    {
    	$search = $request->get('search');
        $users = Student::Where('first_name','like','%'.$search.'%')
        					->orWhere('middle_name','like','%'.$search.'%')
        					->orWhere('last_name','like','%'.$search.'%')->paginate(200);
        return view('member.index')->with('users',$users); 
	 }

	  public function searchstf(request $request)
    {
    	$search = $request->get('search');
        $users = Staff::Where('first_name','like','%'.$search.'%')
        					->orWhere('middle_name','like','%'.$search.'%')
        					->orWhere('last_name','like','%'.$search.'%')->paginate(200);
        return view('member.index')->with('users',$users); 
	 }

    
}
