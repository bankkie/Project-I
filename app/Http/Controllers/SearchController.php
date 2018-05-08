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
use App\file;
use App\Help;
use App\Category;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    
    public function searchstd(request $request)
    {
    	$search = $request->get('search');
        $users = Student::Where('first_name','like','%'.$search.'%')
        					->orWhere('middle_name','like','%'.$search.'%')
        					->orWhere('last_name','like','%'.$search.'%')
                            ->orWhere('email','like','%'.$search.'%')
                            ->orWhere('std_id','like','%'.$search.'%')->paginate(200);
        return view('member.index')->with('users',$users); 
	 }

	  public function searchstf(request $request)
    {
    	$search = $request->get('search');
        $users = Staff::Where('first_name','like','%'.$search.'%')
        					->orWhere('middle_name','like','%'.$search.'%')
        					->orWhere('last_name','like','%'.$search.'%')
                            ->orWhere('faculty','like','%'.$search.'%')
                            ->orWhere('email','like','%'.$search.'%')
                            ->orWhere('country','like','%'.$search.'%')->paginate(200);
        return view('staff.index')->with('users',$users); 
	 }

      public function searchvol(request $request)
    {
        $search = $request->get('search');
        $volunteers = Volunteer::Where('name','like','%'.$search.'%')
                            ->orWhere('nickname','like','%'.$search.'%')
                            ->orWhere('email','like','%'.$search.'%')
                            ->orWhere('std_id','like','%'.$search.'%')->paginate(200);
        return view('volunteer.index')->with('volunteers',$volunteers); 
     }

     public function searchac(request $request)
    {
        $search = $request->get('search');
        $user = file::Where('title','like','%'.$search.'%')
                            ->orWhere('detial','like','%'.$search.'%')
                            ->paginate(1);
        return view('show_activity')->with('user',$user); 
     }

     public function searchbuddy(request $request)
    {
        $search = $request->get('search');
        $students = Student::Where('first_name','like','%'.$search.'%')
                            ->orWhere('middle_name','like','%'.$search.'%')
                            ->orWhere('last_name','like','%'.$search.'%')
                            ->orWhere('facebook','like','%'.$search.'%')
                            ->orWhere('hobby','like','%'.$search.'%')
                            ->orWhere('interests','like','%'.$search.'%')
                            ->paginate(200);
        return view('buddy')->with('students',$students); 
     }

     


    
}
