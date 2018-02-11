<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Member;
use Illuminate\Support\Facades\Input;
use DB;



use Session;

class InsertMemberController extends Controller
{
    
    public function index(){
        //fetch all posts data
        $members = Member::orderBy('user_id','desc')->get();
        
        //pass posts data to view and load list view
        return view('member.index', ['members' => $members]);
    }
    
    public function details($id){
        //fetch post data
        $members = Member::find($id);
        
        //pass posts data to view and load list view
        return view('member.details', ['members' => $members]);
    }
    
    
    
    public function insert(Request $request){
        //validate post data
        $this->validate($request, [
            'user_id' => 'required',
            'title' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'Status' => 'required',
            'country' => 'required'
        ]);
        
        //get post data
        $memberData = $request->all();
        
        //insert post data
        Member::create($memberData);
        
        //store status message
        Session::flash('success_msg', 'member added successfully!');

        return redirect()->route('member.index');
    }
    
    public function edit($id){
        //get post data by id
        $members = Member::find($id);
        
        //load form view
        return view('Member.edit', ['members' => $members]);
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
        $memberData = $request->all();
        
        //update post data
        Member::find($id)->update($memberData);
        
        //store status message
        Session::flash('success_msg', 'Member updated successfully!');

        return redirect()->route('member.index');
    }
    
    public function delete($id){
        //update post data
        Member::find($id)->delete();
        
        //store status message
        Session::flash('success_msg', 'Member deleted successfully!');

        return redirect()->route('member.index');
    }
    public function search_mem(Request $request){
        $Search = $request->search_mem;
        $members = DB::table('members')->where('first_name','like',"%$Search%")->get();
        return view('member.index');


    }



    
}