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
        $post->short_description = $request->get('short_description');

        $post->save();
        $id = $post->id;

        return view('photo-upload', compact('id'));
    }

    public function addPhoto(Request $request){
        try {
            $episode = Post::find((int)$request->get('episodeId'));
            $path = $request->file->storeAs('images', 'filename.jpg');
            $episode->image_path = $path;
            $episode->save();
            return json_encode(['status' => true]);
        }catch(\Exception $e){
            return json_encode(['status'=> false, 'message' => $e->getMessage()]);
        }
    }

    public function audioPage($id){
        $episodeId = $id;
        return view('audio-upload', compact('episodeId'));
    }

    public function addAudio(Request $request){
        try {
            $episode = Post::find((int)$request->get('episodeId'));
            $path = $request->file->storeAs('audio', 'filename.mp3');
            $episode->audio_path = $path;
            $episode->save();
            return json_encode(['status' => true]);
        }catch(\Exception $e){
            return json_encode(['status'=> false, 'message' => $e->getMessage()]);
        }
    }

    public function finish($id){
        $episode = Post::find((int)$id);
        return view('finish', compact('episode'));
    }
}
