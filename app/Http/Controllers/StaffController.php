<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Student;
use App\Staff;

use Illuminate\Support\Facades\Input;
use DB;
use App\Http\Requests;

use App\Http\Controllers\Controller;

use PDF;
use Session;


class StaffController extends Controller
{
    public function index(){
        //fetch all posts data
        $users = Staff::orderBy('id','desc')->paginate(20);

        //pass posts data to view and load list view
        return view('staff.index', ['users' => $users]);
    }
    
    public function details($id){
        //fetch post data
        $users = Staff::find($id);
        
        //pass posts data to view and load list view
        return view('staff.details', ['users' => $users]);
    }
     
    
    
    public function update($id, Request $request){
        //validate post data
        $this->validate($request, [
            'title' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            //'Status' => 'required',
            'country' => 'required'
        ]);
        // $studentData = $request->first_name;

        // //get post data
        $userData = $request->all();
        
        //insert post data
        $user_id = $id;
        $var = Student::find($id);
        $foo = Student::find($user_id);
        $var->first_name = $request->first_name;
        $var->middle_name = $request->middle_name;
        $var->last_name = $request->last_name;
        $var->country = $request->country;
        $var->update();
        // $foo->first_name = $userData->first_name;
        // $foo->update();
        //store status message
        Session::flash('success_msg', 'member added successfully!');

        return redirect()->route('staff.index');
    }
    
    public function edit($id){
        //get post data by id
        $users = Staff::find($id);
        $user_id = $id;
        $students = Staff::find($user_id);
        //load form view
        return view('staff.edit', compact('users','students'));
    }
    
    // public function update($id, Request $request){
    //     //validate post data
    //     $this->validate($request, [
    //         'title' => 'required',
    //         'first_name' => 'required',
    //         'middle_name' => 'required',
    //         'last_name' => 'required',
           
    //     ]);
        
    //     //get post data
    //     $userData = $request->all();
        
    //     //update post data
    //     User::find($id)->update($userData);
        
    //     //store status message
    //     Session::flash('success_msg', 'User updated successfully!');

    //     return redirect()->route('member.index');
    // }
    
    public function delete($id){
        //update post data
        Staff::find($id)->delete();
        
        //store status message
        Session::flash('success_msg', 'User deleted successfully!');

        return redirect()->route('staff.index');
    }


    
    public function search_mem(Request $request){
        $Search = $request->search_mem;
        $users = DB::table('staffs')->where('first_name','like',"%$Search%")->get();
        return view('staff.index');


    }
}
