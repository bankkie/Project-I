<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\file;
use App\News;
use Illuminate\Support\Facades\Input;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $posts = file::orderBy('id', 'desc')->paginate(1);
        return view('welcome', compact('posts'))->withPosts($posts);

        
         
    }

   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
}
