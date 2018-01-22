<?php namespace App\Http\Controllers;

use \Input as Input;

class InsertNewsController extends Controller {

      public function insertNews() {
      return view('insert_news') ;
   }
	public function upload(){

		if(Input::hasFile('file')){

			echo 'Uploaded';
			$file = Input::file('file');
			$file->move('uploads', $file->getClientOriginalName());
			echo '<img src="uploads/'. $file->getClientOriginalName().'">';
		}

	}
}