<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Help;
use Illuminate\Support\Facades\Input;
use DB;
use App\Category;
use Session;

class HelpController extends Controller
{
    

    public function getIndex()
   {

		$posts = DB::table('helps')->get();
		$categorys = DB::table('categories')->get();
		return view('help', compact('posts','categorys'))->withPosts($posts);

	}
	public function category($id)

    {
    	$post = Category::find($id);
    	$category = DB::table('helps')
    	->join('categories','helps.category_id','=' ,'categories.id')
    	->select('category_id','categories.name')->get();
        return view('categories.id', ['helps'=>$category]);
    }
	
  
}
