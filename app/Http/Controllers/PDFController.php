<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
use App\User;
use Illuminate\Support\Facades\Input;


class PDFController extends Controller
{
    public function pdf()
    {
    	$users=User::all();
    	$pdf = PDF::loadView('member.pdfall',['users'=>$users]);
    	return $pdf->stream('all_mem.pdf');
    }

    public function pdf_id($id)

    {$users=User::find($id);
    	$pdf = PDF::loadView('member.pdf_id',['users'=>$users]);
    	return $pdf->stream('details.pdf');
    }
}
