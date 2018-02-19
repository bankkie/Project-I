<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Member;
use Input;
use DB;
use Excel;

class ExcelController extends Controller
{
    public function getImport(){
    	return view('member');
    }
    
    
    public function getExport(){
    	$member=Member::all();
    	Excel::create('Export Member',function($excel) use($member){
    		$excel->sheet('Sheet 1',function($sheet) use($member){
    			$sheet->fromArray($member);

    		});
    		})->export('xlsx');
    	
    }
    public function deleteAll(){
    	DB::table('members')->delete();
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
                    $insert[] = ['user_id' => $value->user_id, 'title' => $value->title, 'first_name' => $value->first_name, 'middle_name' => $value->middle_name, 'last_name' => $value->last_name,'title' => $value->title,'title' => $value->title];
                }
                if(!empty($insert)){
                    DB::table('members')->insert($insert);
                    dd('Insert Record successfully.');
                }
            }
        }
        return back();
    }
}
