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

class InsertMemberController extends Controller
{
    

    public function index(){
        //fetch all posts data
        $users = Student::orderBy('id','desc')->paginate(20);

        //pass posts data to view and load list view
        return view('member.index', ['users' => $users]);
    }
    
    public function details($id){
        //fetch post data
        $users = Student::find($id);
        
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
            'email' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'exp_visa' => 'required',
            'exp_passport' => 'required',
            'remarks' => 'required',
            'std_id' => 'required',
            'birthday' => 'required',
            'study_date' => 'required',
            'section' => 'required',
            'status' => 'required', 
            'category' => 'required', 
            'faculty' => 'required', 
            'activity_hour' => 'required', 
            'buddy' => 'required', 
            'facebook' => 'required',
            'line' => 'required',
            'hobby' => 'required',
            'interests' => 'required'
        ]);
        // $studentData = $request->first_name;
        // //get post data
        $userData = $request->all();
        
        //insert post data
        //$user_id = $id;
        $var = Student::find($id);
        //$foo = Student::find($user_id);
        $user_id = $var->user_id;
        $var->title = $request->title;
        $var->first_name = $request->first_name;
        $var->middle_name = $request->middle_name;
        $var->last_name = $request->last_name;
        $var->email = $request->email;
        $var->country = $request->country;
        $var->phone = $request->phone;
        $var->exp_visa = $request->exp_visa;
        $var->exp_passport = $request->exp_passport;
        $var->remarks = $request->remarks;
        $var->std_id = $request->std_id;
        $var->birthday = $request->birthday;
        $var->study_date = $request->study_date;
        $var->section = $request->section;
        $var->status = $request->status;
        $var->category = $request->category;
        $var->faculty = $request->faculty;
        $var->activity_hour = $request->activity_hour;
        $var->buddy = $request->buddy;
        $var->facebook = $request->facebook;
        $var->line = $request->line;
        $var->hobby = $request->hobby;
        $var->interests = $request->interests;
        $var->update();
        // $foo->first_name = $userData->first_name;
        // $foo->update();
        //store status message
        Session::flash('success_msg', 'Student added successfully!');
        $user = User::find($var->user_id);
        $user->first_name = $request->first_name;
        $user->middle_name = $request->middle_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->country = $request->country;
        $user->update();
        Session::flash('success_msg', 'User added successfully!');
        return redirect()->route('member.index');
        //return redirect()->route('updateUser', compact('user_id','userData'));
    }
    // public function updateUser($user_id, $userData){
    //     $var = User::find($user_id);
    //     $var->first_name = $userData->first_name;
    //     $var->middle_name = $userData->middle_name;
    //     $var->last_name = $userData->last_name;
    //     $var->email = $userData->email;
    //     $var->country = $userData->country;
    //     $var->update();
    //     Session::flash('success_msg', 'member added successfully!');
    //     return redirect()->route('member.index');
    // }
    
    
    public function edit($id){
        //get post data by id
       //get post data by id
        $users = Student::find($id);
        $user_id = $id;
        $students = Student::find($user_id);
        //load form view
        return view('member.edit', compact('users','students'));
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


    public function updateuser($id, Request $request){
        //validate post data
        $this->validate($request, [
            'title' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'country' => 'required',
            'phone' => 'required',
           
            
        ]);
        // $studentData = $request->first_name;
        // //get post data
        $userData = $request->all();
        
        //insert post data
        //$user_id = $id;
        $var = Student::find($id);
        //$foo = Student::find($user_id);
        $user_id = $var->user_id;
        $var->title = $request->title;
        $var->first_name = $request->first_name;
        $var->middle_name = $request->middle_name;
        $var->last_name = $request->last_name;
        $var->email = $request->email;
        $var->country = $request->country;
        $var->phone = $request->phone;
       
        $var->update();
        // $foo->first_name = $userData->first_name;
        // $foo->update();
        //store status message
        Session::flash('success_msg', 'Student added successfully!');
        $user = User::find($var->user_id);
        $user->first_name = $request->first_name;
        $user->middle_name = $request->middle_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->country = $request->country;
        $user->update();
        Session::flash('success_msg', 'User added successfully!');
        return redirect()->route('member.index');
        //return redirect()->route('updateUser', compact('user_id','userData'));
    }
   
    
    public function edituser($id){
        //get post data by id
       //get post data by id
        $users = Student::find($id);
        $user_id = $id;
        $students = Student::find($user_id);
        //load form view
        return view('member.edituser', compact('users','students'));
    }
    
    
    public function delete($id){
        //update post data
        //update post data
        $var = Student::find($id);
        Student::find($id)->delete();
        
        //store status message
        Session::flash('success_msg', 'User deleted successfully!');
        User::find($var->user_id)->delete();
        Session::flash('success_msg', 'User deleted successfully!');
        return redirect()->route('member.index');
    }


    
    public function search_mem(Request $request){
        $Search = $request->search_mem;
        $users = DB::table('students')->where('first_name','like',"%$Search%")->get();
        return view('member.index');


    }



    
}