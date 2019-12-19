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
use App\Video;
use App\Tag;
use App\Taggable;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/create', function () {

    $post = Post::create([
        'name' => 'My First Post'
    ]);

    $tag1 = Tag::find(1);

    $post->tags()->save($tag1);

    $video = Video::create([
        'name' => 'video.mov'
    ]);

    $tag2 = Tag::find(2);

    $video->tags()->save($tag2);






});