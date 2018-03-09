<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Volunteer;
use Illuminate\Support\Facades\Input;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use PDF;
use Session;

class ShowVolController extends Controller
{
     public function index(){
        //fetch all posts data
        $volunteers = Volunteer::orderBy('id','desc')->paginate(20);

        //pass posts data to view and load list view
        return view('volunteer.index', ['volunteers' => $volunteers]);
    }
    
    public function details($id){
        //fetch post data
        $volunteers = Volunteer::find($id);
        
        //pass posts data to view and load list view
        return view('volunteer.details', ['volunteer' => $volunteers]);
    }
     
    
    
    

    
    public function delete($id){
        //update post data
        Volunteer::find($id)->delete();
        
        //store status message
        Session::flash('success_msg', 'User deleted successfully!');

        return redirect()->route('volunteer.index');
    }


    
    public function search_mem(Request $request){
        $Search = $request->search_mem;
        $users = DB::table('volunteer')->where('first_name','like',"%$Search%")->get();
        return view('volunteer.index');


    }
}
