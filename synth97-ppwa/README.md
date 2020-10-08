<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


## Using Tinker

To create a new database entry using php artisan tinker, follow these steps.

This is assuming we have a new model and migration for articles. in the create_articles_table migration file, I added 
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('excerpt');
            $table->text('body');
            $table->timestamps();
        });
as the schema. After running php artisan migrate, we got a new table with those columns.

In order to create a new entry with those columns using tinker, these commands were ran:
1. php artisan tinker
2. $article = new App\Models\Article;
3. $article->title = 'Getting to know us';
4. $article->excerpt = 'article excerpt text';
5. $article->body = 'article body text';

At that point, I can run $article to view the entire entry with the new contents

If satisfied, run $article->save();



## The seven Restful Controller Actions to become familiar with
## not necessary to follow this convention but is probably a good idea

1. index()
    - Should render a list
        - list of articles
        - list of projects
        - lists of users
    Summary: Render a list of a resource.

2. show()
    - Shows a specific item
        - show a single article
        - show me a single project
        - show me a single user
    Summary: Show a single resource.

3. create()
    Summary: Shows a view to create a new resource.
         domain of the create action is as follows:
            ** At some point you visit a page that has a form
            ** Fill out the title
            ** Fill out the body
            ** click submit

4. store()
    Summary: Will persist the resource created in the create form.

5. edit()
    Summary: Will show a view to edit an existing resource. 

6. update()
    Summary: Persist the edited resource. 

7. destroy()
    Summary: Delete the resource. 


NOTE: running php artisan make:controller nameController -r will create all 7 of these actions for you
    - if you add the -m flag as well, it will ALSO reference the model throughout the controller!

## Restful Routing

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
