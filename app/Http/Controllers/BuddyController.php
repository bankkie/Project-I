<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuddyController extends Controller
{
    public  function getBuddy(){
        return view('buddy');
    }
}