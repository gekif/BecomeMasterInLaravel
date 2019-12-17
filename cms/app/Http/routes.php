<?php

/*
|--------------------------------------------------------------------------
| Laravel Eloquent/ORM
|--------------------------------------------------------------------------
*/

use App\Post;

// Reading Data
/*Route::get('/read', function () {

    $posts = Post::all();

    foreach ($posts as $post) {
        return $post->title;
    }

});


Route::get('/find', function () {

    $posts = Post::find(1);

    return $posts->title;


});*/



// Reading Data Using Constraint
/*Route::get('/findwhere', function () {

    // Get the data from Select * from posts where id = 1 order by id desc limit 1
    $posts = Post::where('id', 1)->orderBy('id', 'desc')->take(1)->get();

    return $posts;

});*/



// More ways to retrieve data
Route::get('/findmore', function () {

//    $posts = Post::findOrFail(1);
//
//    return $posts;

    $posts = Post::where('users_count', '<', 50)->firstOrFail();

    return $posts;

});