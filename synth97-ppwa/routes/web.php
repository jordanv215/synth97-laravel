<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::get('/playground', function () {

    // since we're requesting, this view will be empty unless the url looks something like this: http://127.0.0.1:8000/playground/?name=jordan
    $name = request('name');

    return view('playground', [
        'name' => $name
    ]);

});

// wildcare route

Route::get('/posts/{post}', function ($post) {

    $posts = [
        'my-first-post' => 'Hello, this is the first post',
        'my-second-post' => 'Yo, this is the second post'
    ];

    return view('post', [
        'post' => $posts[$post] ?? 'Nothing here yet.'
    ]);

});
