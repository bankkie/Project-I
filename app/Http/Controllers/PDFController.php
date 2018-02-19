<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
use App\Member;
use Illuminate\Support\Facades\Input;


class PDFController extends Controller
{
    public function pdf()
    {
    	$members=Member::all();
    	$pdf = PDF::loadView('member.pdfall',['members'=>$members]);
    	return $pdf->stream('all_mem.pdf');
    }

    public function pdf_id($id)

    {$members=Member::find($id);
    	$pdf = PDF::loadView('member.pdf_id',['members'=>$members]);
    	return $pdf->stream('details.pdf');
    }
}
