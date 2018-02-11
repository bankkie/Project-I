<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use DB;
use App\Member;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    
    public function search_mem(Request $request){
        $Search=$request->search_mem;
        $members = DB::table('members')->where('first_name','like',"$Search")->get();
        return view('member.index');


    }
}
