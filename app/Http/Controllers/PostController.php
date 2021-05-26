<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(string $slug){
        $post = Post::wherte('slug', '=', $slug)->first();
        return view('guest.post.show', compact('post'));
    }
}
