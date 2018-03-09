<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use Session;
use DB;
use App\User;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    
    public function search(request $request)
    {
    	$search = $request->get('search');
        $users = User::Where('first_name','like','%'.$search.'%')
        					->orWhere('middle_name','like','%'.$search.'%')
        					->orWhere('last_name','like','%'.$search.'%')->paginate(20);
        return view('member.index')->with('users',$users); 
	 }

    
}
