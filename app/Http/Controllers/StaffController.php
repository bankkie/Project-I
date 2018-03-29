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
            'country' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'exp_visa' => 'required',   
            'exp_passport' => 'required',   
            'remarks' => 'required',
            'begin_date' => 'required', 
            'exp_wp' => 'required',     
            'ss_card' => 'required',
            'tax_no' => 'required',
            'birthday' => 'required',   
            'ext' => 'required',
            'status' => 'required',     
            'faculty' => 'required',    
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
        $var = Staff::find($id);
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
        $var->exp_wp = $request->exp_wp;
        $var->ss_card = $request->ss_card;
        $var->tax_no = $request->tax_no;
        $var->birthday = $request->birthday;
        $var->begin_date = $request->begin_date;
        $var->ext = $request->ext;
        $var->status = $request->status;
        $var->faculty = $request->faculty;
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
        $var = Student::find($id);
        Staff::find($id)->delete();
        
        //store status message
        Session::flash('success_msg', 'User deleted successfully!');
        User::find($var->user_id)->delete();
        Session::flash('success_msg', 'User deleted successfully!');
        return redirect()->route('staff.index');
    }
    
    public function search_mem(Request $request){
        $Search = $request->search_mem;
        $users = DB::table('staffs')->where('first_name','like',"%$Search%")->get();
        return view('staff.index');
    }
}