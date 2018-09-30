<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $posts = Post::all();


        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //return $request->title;
        //Post::create($request);

//        $input = $request->all();
//        $input['title'] = $request->title;
//
//        Auth::user()->id;
//        Post::create($request->all());
        Post::create([
            'user_id' =>Auth::user()->id,
            'title' =>$request->title,
            'post_code' =>$request->post_code,
            'house_number' =>$request->house_number,
            'property_type' =>$request->property_type,
            'beds_no' => $request->beds_no,
            'bathrooms_no' => $request->bathrooms_no,
            'price' => $request->price,
            'commission' => $request->commision,
            'description' =>$request->description
    ]);

//    $post = new Post;
//    $post-> title = $request->title;
//    $post-> save();

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //first we find the id
        $post = Post::findOrFail($id);

        //then we grab and update the object
        $post->update($request->all());

        //return redirect to the page
        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::findOrFail($id);

        $post->delete();

        return redirect('posts');


    }
//    public function allPostsByAUser($user_id){
//
//        retutn
//        $posts = Post::
//    }
}
