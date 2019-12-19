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

use App\Post;
use App\User;

Route::get('/', function () {
    return view('welcome');
});


Route:: get('/create', function () {

    $user = User::findOrFail(1);

/*    $user->posts()->save(new Post([
        'title' => 'I Will Remember',
        'body' => 'I Love My Wife'
    ]));*/

    $user->posts()->save(new Post([
        'title' => 'I Will Remember 2',
        'body' => 'I Love My Wife 2'
    ]));

});


Route::get('/read', function () {

    $user = User::findOrFail(1);

//    return $user->posts;

    foreach ($user->posts as $post) {
        echo $post->title . "<br>";
    }

});


Route::get('/update', function () {

    $user = User::findOrFail(1);

    $user->posts()->whereId(1)->update([
        'title' => 'I Love Laravel',
        'body' => 'I Like You Laravel, Awesome'
    ]);

});


Route::get('/delete', function () {

    $user = User::findOrFail(1);

    $user->posts()->whereId(1)->delete();

});
