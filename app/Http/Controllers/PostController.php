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

//        $posts = Post::all();
        $posts = Post::paginate(5);

//        $user = Auth::user();
//        $user->load('favourited');


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
        if(Auth::user()->role === 'sourcer'){
            return view('posts/create');
        }
        else{
          return redirect()->route('posts.index');
        }
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
            'commission' => $request->commission,
            'description' =>$request->description,
            'image_path'=>$request->image_path,
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

        if(Auth::user()->role === 'sourcer'){
            $post = Post::findOrFail($id);

            return view('posts.edit', compact('post'));
        }
        else{
            return redirect('/posts');
        }

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
        return redirect('/usersposts');
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
    public function favouritePost(Post $post)
    {
        Auth::user()->favourites()->attach($post->id);

        return back();
    }

    public function unFavouritePost(Post $post)
    {
        Auth::user()->favourites()->detach($post->id);

        return back();
    }
    public function  authPosts()
    {
        $posts = Post::where('user_id','=',Auth::user()->id)->paginate(5);

        return view('posts/index', ['posts' => $posts]);
    }
    public function upload(Request $request)
    {
//        Read image
        $img = Post::make($request->file('image')->getPathName());
        $extension = $request->file('image')->getClientOriginalExtension();

    }

}
