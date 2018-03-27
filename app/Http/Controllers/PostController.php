<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Help;
use App\Category;
use DB;
use Session;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table('helps')->get();
        $categorys = DB::table('categories')->get();
        return view('posts.help', compact('posts','categorys'))->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('posts.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
                'position' => 'required|max:255',
                'name'  => 'required',
                'phone'  => 'required',
                'category_id'   => 'required|integer',
                'email'  => 'required'
            ));

        // store in the database
        $post = new Help;

        $post->position = $request->position;
        $post->name = $request->name;
        $post->phone = $request->phone;
        $post->category_id = $request->category_id;

        $post->email = $request->email;

        $post->save();

        Session::flash('success', 'The blog post was successfully save!');

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Help::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Help::find($id);
        $categories = Category::all();
        $cats = array();
        foreach ($categories as $category) {
            $cats[$category->id] = $category->name;
        }

        return view('posts.edit')->withPost($post)->withCategories($cats);
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
        $post = Help::find($id);
        
        if ($request->input('name') == $post->name) {
            $this->validate($request, array(
                'position' => 'required|max:255',
                
                'phone'  => 'required',
                'category_id'   => 'required|integer',
                'email'  => 'required'
            ));
        } else {
        $this->validate($request, array(
                'position' => 'required|max:255',
                'name'  => 'required',
                'phone'  => 'required',
                'category_id'   => 'required|integer',
                'email'  => 'required'
            ));
        }

        // Save the data to the database
        $post = Help::find($id);

        $post->position = $request->input('position');
        $post->name = $request->input('name');
        $post->phone = $request->input('phone');
        $post->category_id = $request->input('category_id');
        $post->email = $request->input('email');

        $post->save();

        // set flash data with success message
        Session::flash('success', 'This post was successfully saved.');

        // redirect with flash data to posts.show
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Help::find($id);

        $post->delete();

        Session::flash('success', 'The post was successfully deleted.');
        return redirect()->route('posts.help');
    }
}
