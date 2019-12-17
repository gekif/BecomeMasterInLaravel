<?php

/*
|--------------------------------------------------------------------------
| Laravel Eloquent/ORM Relationship
|--------------------------------------------------------------------------
*/

use App\Post;
use App\User;


// One on One Relationship
Route::get('/user/{id}/post', function ($id) {

    return User::find($id)->post->content;

});



// Inverse Relationship
Route::get('/post/{id}/user', function ($id) {

    return Post::find($id)->user->name;

});



// One To Many Relationship
Route::get('/posts', function () {

    $user = User::find(1);

    foreach ($user->posts as $post) {
        echo $post->title . "<br>";
    }

});

