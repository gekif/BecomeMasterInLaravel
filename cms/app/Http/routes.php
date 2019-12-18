<?php

/*
|--------------------------------------------------------------------------
| Laravel Eloquent/ORM Relationship
|--------------------------------------------------------------------------
*/

use App\Country;
use App\Photo;
use App\Post;
use App\Tag;
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

    $country = Country::find(1);

    foreach ($country->posts as $post) {
        return $post->title;
    }

});


// Polymorphic Relation
Route::get('/user/{id{/photos', function ($id) {

    $user = User::find($id);

    foreach ($user->photos as $photo) {
        return $photo;
    }

});


Route::get('/post/{id}/photos', function ($id) {

    $post = Post::find($id);

    foreach ($post->photos as $photo) {
        echo $photo->path . "<br>";
    }

});


// Polymorphic Relation Inverse
// The purpose is to know the owner of the photo
Route::get('photo/{id}/post', function ($id) {

    $photo = Photo::findOrFail($id);

    return $photo->imageable;

});


// Polymorphic many to many
Route::get('/post/tag', function () {

    $post = Post::find(1);

    foreach ($post->tags as $tag) {
        echo $tag->name;
    }

});


// Polymorphic retrieving owner of the post
Route::get('/tag/post/{id}', function ($id) {

    $tag = Tag::find($id);

//    return $tag;

    foreach ($tag->posts as $post) {
        echo $post->title . "<br>";
    }

});


