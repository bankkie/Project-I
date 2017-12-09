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
    	return view('all_data');
    }
    public function postImport(){

    	Excel::load(Input::file('member'),function($reader){
    		$reader->each(function($sheet){
    			Member::firstOrCreate($sheet->toArray());

    		});

    	});return redirect('member');
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
}
