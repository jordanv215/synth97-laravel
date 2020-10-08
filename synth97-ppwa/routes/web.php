<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ArticlesController;


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


// controller route
Route::get('/posts/{post}', [PostsController::class, 'show']);

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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/example', function () {
    return view('example');
});

Route::get('/about', function () {
    $article = App\Models\Article::take(3)->latest('updated_at')->get();
    return view('about', [
        'articles' => $article
    ]);
});

Route::get('articles', [ArticlesController::class, 'showAll']);

// {article} is a wildcard
Route::get('/articles/{article}', [ArticlesController::class, 'show']);

// wildcare route
// Route::get('/posts/{post}', function ($post) {

//     // associative array to simulate a db of posts
//     $posts = [
//         'my-first-post' => 'Hello, this is the first post',
//         'my-second-post' => 'Yo, this is the second post'
//     ];


//     // if the post doesnt exist in the datastore above, show 404
//     if (! array_key_exists($post, $posts)) {
//         abort(404, 'Sorry, this post was not found.');
//     }

//     // if it does exist, pull up the post
//     return view('post', [
//         'post' => $posts[$post]
//     ]);

// });

