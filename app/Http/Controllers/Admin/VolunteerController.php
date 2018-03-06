<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public  function getVolunteer(){
        return view('admin.volunteer');
    }
}
