<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Input;
use DB;
use App\Http\Requests;

use App\Http\Controllers\Controller;

use PDF;
use Session;

class InsertMemberController extends Controller
{
    

    public function index(){
        //fetch all posts data
        $users = User::orderBy('id','desc')->paginate(20);
        
        //pass posts data to view and load list view
        return view('member.index', ['users' => $users]);
    }
    
    public function details($id){
        //fetch post data
        $users = User::find($id);
        
        //pass posts data to view and load list view
        return view('member.details', ['users' => $users]);
    }
     
    
    
    public function update($id, Request $request){
        //validate post data
        $this->validate($request, [
            'title' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'Status' => 'required',
            'country' => 'required'
        ]);
        
        
        //get post data
        $userData = $request->all();
        
        //insert post data
        User::create($userData);
        
        //store status message
        Session::flash('success_msg', 'member added successfully!');

        return redirect()->route('member.index');
    }
    
    public function edit($id){
        //get post data by id
        $users = User::find($id);
        
        //load form view
        return view('Member.edit', ['users' => $users]);
    }
    
    public function update($id, Request $request){
        //validate post data
        $this->validate($request, [
            'title' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
           
        ]);
        
        //get post data
        $userData = $request->all();
        
        //update post data
        User::find($id)->update($userData);
        
        //store status message
        Session::flash('success_msg', 'User updated successfully!');

        return redirect()->route('member.index');
    }
    
    public function delete($id){
        //update post data
        User::find($id)->delete();
        
        //store status message
        Session::flash('success_msg', 'User deleted successfully!');

        return redirect()->route('member.index');
    }
    public function search_mem(Request $request){
        $Search = $request->search_mem;
        $users = DB::table('users')->where('first_name','like',"%$Search%")->get();
        return view('member.index');


    }



    
}