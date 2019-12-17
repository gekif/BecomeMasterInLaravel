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
/*Route::get('/findmore', function () {

//    $posts = Post::findOrFail(1);
//
//    return $posts;

    $posts = Post::where('users_count', '<', 50)->firstOrFail();

    return $posts;

});*/



// Basic Insert
/*Route::get('/basicinsert', function () {

    // Create instantion of post
    $post = new Post();

    // Access every post element, give the value
    $post->title = 'Vue';
    $post->body = 'new Vue JS';

    // Save the result
    $post->save();

});


// Basic Update
Route::get('/basicupdate', function () {

    // Create instantion of post
    $post = Post::find(2);

    // Access every post element, give the value
    $post->title = 'Vue 2';
    $post->body = 'new Vue JS 2';

    // Save the result
    $post->save();

});*/



// Creating data and configuring mass assignment
Route::get('/create', function () {

    Post::create([
        'title' => 'The create method',
        'body' => 'Wow im learning laravel'
    ]);



});
