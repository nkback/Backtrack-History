<?php

namespace App\Http\Controllers;


use App\Post;

class BlogController extends Controller
{

    public function index() {
        $episodes = Post::all();
        return view('episodes', compact('episodes'));
    }
}
