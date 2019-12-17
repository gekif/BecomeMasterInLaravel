<?php

/*
|--------------------------------------------------------------------------
| Laravel Eloquent/ORM
|--------------------------------------------------------------------------
*/


// Reading Data
use App\Post;

Route::get('/read', function () {

    $posts = Post::all();

    foreach ($posts as $post) {
        return $post->title;
    }

});


Route::get('/find', function () {

    $posts = Post::find(1);

    return $posts->title;


});

