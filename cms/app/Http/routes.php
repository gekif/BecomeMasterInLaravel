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

