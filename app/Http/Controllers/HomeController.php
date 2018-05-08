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
        $new = News::orderBy('id', 'desc')->paginate(3);


        return view('home', compact('posts','new'))->withPosts($posts,$new);

        
         
    }

   
    
    
}
