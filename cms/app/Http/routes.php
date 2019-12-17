<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::resource('posts', 'PostsController');


//Route::get('/contact', 'PostsController@contact');


//Route::get('post/{id}/{name}/{password}', 'PostsController@showPost');


/*
|--------------------------------------------------------------------------
| Database RAW SQL Queries
|--------------------------------------------------------------------------
|
*/


// Insert
/*Route::get('/insert', function () {

    DB::insert('insert into posts(title, body) values(?, ?)', [
        'PHP With Laravel',
        'Larave is the best thing that has happened to PHP'
    ]);

});*/


// Read
Route::get('/read', function () {

    $results = DB::select('select * from posts where id = ?', [1]);

//    foreach ($results as $post) {
//        return $post->title;
//    }

    // Return JSON
    return $results;

    // debugging
//     dd($results);
//     var_dump($results);

});

