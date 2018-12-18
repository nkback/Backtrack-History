<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addPost(){
        return view('add-post');
    }

    public function initialPost(Request $request){
        $post = new Post();

        $post->title = $request->get('title');
        $post->blog_post = $request->get('blog_content');

        $post->save();
        $id = $post->id;

        return view('photo-upload', compact('id'));
    }

    public function addPhoto(){
        return view('audio-upload');
    }

    public function addAudio(){
        return view('short-description');
    }

    public function finalSave() {

        dd("Done");

    }

}
