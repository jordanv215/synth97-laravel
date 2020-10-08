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

// create new article
Route::get('articles/create', [ArticlesController::class, 'create']);

Route::post('articles', [ArticlesController::class, 'store']);

// {article} is a wildcard. THIS TAKES PRECEDENT OVER OTHER ROUTES, SO PUT IT BELOW THE SHOW OR CREATE, ETC
Route::get('/articles/{article}', [ArticlesController::class, 'show']);

Route::get('/articles/{article}/edit', [ArticlesController::class, 'edit']);

Route::put('/articles/{article}', [ArticlesController::class, 'update']);



// REST EXAMPLES
/*
    Route::get('articles', 'ArticlesController@index');
    ** will allow you to read from a list of articles, sort of like a collection
*/

/*
    Route::get('/articles/{article}', 'ArticlesController@show');
    ** if I visit /articles/{ some identifier }, that will allow me to read a single article
*/


/* SUMMARY

** Common http verbs are GET, POST, PUT, DELETE (there's also PATCH but that is usable with PUT most of the time)
    ** GET /articles (for a collection)
    ** GET /articles/:id (for a single article)
    ** POST /articles (create a new article)
    ** PUT /articles/:id (update the article with a given id)
    ** DELETE /articles/:id (delete the article with a given id)


    ** GET /videos
    ** GET /videos/2
    ** PUT /videos/2
        ** if I wanted to, say, create a form to edit the video. could be this: GET /videos/2/edit
        ** if I wanted to go to a form that creates a new video, GET /videos/create
        ** DELETE /videos/2
*/
