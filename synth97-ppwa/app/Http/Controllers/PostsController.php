<?php

namespace App\Http\Controllers;

class PostsController
{
    public function show($slug) {

        $post = \DB::table('posts')->where('slug', $slug)->first();

        if (! $post) {
            abort(404);
        }

        // dd($post);


        // if it does exist, pull up the post
        return view('post', [
            'post' => $post
        ]);
    }
}
