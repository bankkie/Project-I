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
     public function updatevol($id, Request $request){
        //validate post data
        $this->validate($request, [
            'std_id' => 'required',
            'name' => 'required',
            'nickname' => 'required',
            'email' => 'required',
            'facebook' => 'required',
            'phone' => 'required',
            'reason' => 'required',
            'remarks' => 'required',
            'comment' => 'required',
            'history' => 'required',
            'level' => 'required',
            'complete' => 'required',
           
            
        ]);
        // $studentData = $request->first_name;
        // //get post data
        $userData = $request->all();
        
        //insert post data
        //$user_id = $id;
        $var = Volunteer::find($id);
        //$foo = Student::find($user_id);
        $id = $var->id;
        $var->std_id = $request->std_id;
        $var->name = $request->name;
        $var->nickname = $request->nickname;
      
        $var->email = $request->email;
        $var->facebook = $request->facebook;
        $var->phone = $request->phone;
        $var->reason = $request->reason;
        $var->remarks = $request->remarks;
        $var->comment = $request->comment;
        $var->history = $request->history;
        $var->level = $request->level;
        $var->complete = $request->complete;

       
        $var->update();
        // $foo->first_name = $userData->first_name;
        // $foo->update();
        //store status message
        Session::flash('success_msg', 'Student added successfully!');
        
        return redirect()->route('volunteer.index');
        //return redirect()->route('updateUser', compact('user_id','userData'));
    }
   
    
    public function editvol($id){
        //get post data by id
       //get post data by id
        $users = Volunteer::find($id);
     
        //load form view
        return view('volunteer.edit', compact('users'));
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
