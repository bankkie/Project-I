<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
use App\User;
use App\Volunteer;
use App\Student;
use App\Staff;
use Illuminate\Support\Facades\Input;


class PDFController extends Controller
{
    public function pdfstd()
    {
    	$users=Student::all();
    	$pdf = PDF::loadView('member.pdfstd',['students'=>$users]);
    	return $pdf->stream('all_student.pdf');
    }
     public function pdfstf()
    {
        $users=Staff::all();
        $pdf = PDF::loadView('member.pdfstf',['staffs'=>$users]);
        return $pdf->stream('all_staff.pdf');
    }


    public function pdf_id($id)

    {$users=Student::find($id);
    	$pdf = PDF::loadView('member.pdf_id',['users'=>$users]);

    	return $pdf->stream('details.pdf');
    }

    public function stfpdf_id($id)

    {$users=Staff::find($id);
        $pdf = PDF::loadView('staff.pdf_id',['users'=>$users]);

        return $pdf->stream('details.pdf');
    }

    


    public function pdf_vol($id)

    {$volunteers=Volunteer::find($id);
        $pdf = PDF::loadView('volunteer.pdf_id',['volunteer'=>$volunteers]);
        return $pdf->stream('details.pdf');
    }
}
