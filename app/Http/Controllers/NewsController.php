<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\file;
use Illuminate\Support\Facades\Input;
use DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("file");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new file;
        $user->id=Input::get('id');
        $user->title=Input::get('title');

         $user->detial=Input::get('detial');



        if(Input::hasFile('image')){
            $file=Input::file('image');
            
           
            $user->img1=$file->getclientOriginalName();


           
   
   
        }
        if(Input::hasFile('image2')){
            $file=Input::file('image2');
            
           


            $user->img2=$file->getclientOriginalName();
           
   
   
        }
        if(Input::hasFile('image3')){
            $file=Input::file('image3');
            
           


            $user->img3=$file->getclientOriginalName();
           
   
   
        }
        $user->save();
        return redirect("show");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function showall()
   {



        $user = DB::table('files')
                ->orderBy('id', 'DESC')
                ->paginate(1);


        
        

        return view('show_activity', compact('user'));

   }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
