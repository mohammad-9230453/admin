<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
       return view('cart.posts' , compact('posts'));
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
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required',
        ] , [
            'name.required' => 'این فیلد نباید خالی بماند',
            'price.required' => 'این فیلد نباید خالی بماند',
        ]);

        $post = Post::create($request->all());
        $file = $request->file('photo');
        $name = time() . $file->getClientOriginalName();
        $file->move('images/' , $name);
        $post->photo()->Create(['path'=>$name]);
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

        return view('cart.post_edit' , compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required',
        ], [
            'name.required' => 'این فیلد نباید خالی بماند',
            'price.required' => 'این فیلد نباید خالی بماند',
        ]);
        if ($file = $request->file('photo')){
            $post->photo()->delete();
            $name = time() . $file->getClientOriginalName();
            $file->move('images/' , $name);
            $post->photo()->Create(['path'=>$name]);

        }
        $post->update($request->all());
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        $post->photo()->delete();
        return redirect()->route('post.index');

    }
}
