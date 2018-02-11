<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\News;
use App\file;
use App\Http\Controllers\CheckstatusController;

class InsertNewsController extends Controller {

      public function insertNews() {
      return view('insert_news') ;
   }


	public function upload(Request $request)
	{
		$var = new News;
	
		$var->id = $request->id;
  		$var->title = $request->title;
  		$var->detial = $request->detial;

      if (Input::hasFile('image'))
        {
            $file=Input::file('image');
            $file->move(public_path(). '/', $file->getClientOriginalName());
            
            $var->image= $file->getClientOriginalName();
        }
         
        $obj->save();
        echo "Record inserted successfully.<br/>";
      echo '<a href = "/">Click Here</a> to go back.';


   }
 public function showNews($id)
    {
        $post=News::find($id);
        return view('/activity', compact('post'));
    }

	
}