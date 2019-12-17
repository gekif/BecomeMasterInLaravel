<?php

/*
|--------------------------------------------------------------------------
| Laravel Eloquent/ORM Relationship
|--------------------------------------------------------------------------
*/

use App\User;


// One on One Relationship
Route::get('/user/{id}/post', function ($id) {

    return User::find($id)->post->content;

});


