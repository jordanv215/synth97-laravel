<?php

namespace App\Http\Controllers;

class PostsController
{
    public function show($slug) {

        $post = \DB::table('posts')->where('slug', $slug)->first();

        dd($post);

        // $posts = [
        //     'my-first-post' => 'Hello, this is the first post',
        //     'my-second-post' => 'Yo, this is the second post'
        // ];


        // if the post doesnt exist in the datastore above, show 404
        if (! array_key_exists($post, $posts)) {
            abort(404, 'Sorry, this post was not found.');
        }

        // if it does exist, pull up the post
        return view('post', [
            'post' => $posts[$post]
        ]);
    }
}
