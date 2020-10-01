<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Post;

class PostsController extends Controller
{
    public function show($slug) {

        $post = Post::where('slug', $slug)->firstOrFail();

        // if it does exist, pull up the post
        return view('post', [
            'post' => $post
        ]);
    }
}
