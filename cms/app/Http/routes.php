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


// Many to Many Relationship
Route::get('/user/{id}/role', function ($id) {

    $user = User::find($id);

    foreach ($user->roles as $role) {
        return $role->name;
    }

    //    $user = User::find($id)->roles()->orderBy('id', 'desc')->get();

//    return $user;


});


// Accessing the intermediate table/pivot
Route::get('/user/pivot', function () {

    $user = User::find(1);

    foreach ($user->roles as $role) {
        return $role->pivot->created_at;
    }

});



// Has Many Through Relationship
Route::get('/user/country', function () {

});

