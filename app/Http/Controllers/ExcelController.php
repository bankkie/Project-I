<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Input;
use DB;
use Excel;
use App\Student;
use App\Staff;

class ExcelController extends Controller
{
    public function getImport(){
    	return view('student');
    }
    
    
    public function ExportStd(){
    	$user=Student::all();
    	Excel::create('Student',function($excel) use($user){
    		$excel->sheet('Sheet 1',function($sheet) use($user){
    			$sheet->fromArray($user);

    		});
    		})->export('xlsx');
    	
    }

    public function ExportStf(){
        $user=Staff::all();
        Excel::create('Staff',function($excel) use($user){
            $excel->sheet('Sheet 1',function($sheet) use($user){
                $sheet->fromArray($user);

            });
            })->export('xlsx');
        
    }


    public function deleteAll(){
    	DB::table('users')->delete();
    	return back();
    }
    public function importExcel()
    {
        if(Input::hasFile('import_file')){
            $path = Input::file('import_file')->getRealPath();
            $data = Excel::load($path, function($reader) {
            })->get();
            if(!empty($data) && $data->count()){
                foreach ($data as $key => $value) {
                    $insert[] = ['id' => $value->id, 'title' => $value->title, 'first_name' => $value->first_name, 'middle_name' => $value->middle_name, 'last_name' => $value->last_name,'country' => $value->country,'Status' => $value->Status];
                }
                if(!empty($insert)){
                    DB::table('users')->insert($insert);
                    dd('Insert Record successfully.');
                }
            }
        }
        return back();
    }
}
