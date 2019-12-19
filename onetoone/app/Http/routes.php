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

use App\Address;
use App\User;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/insert', function () {

    $user = User::findOrFail(1);

    $address = new Address([
        'name' => 'Jalan Camar 2 Blok B3 16'
    ]);

    $user->address()->save($address);

});


Route::get('/update', function () {

    $address = Address::whereUserId(1)->first();

    $address->name = 'Jalan Behape 1 Blok CC No 3/4';

    $address->save();

});


Route::get('/read', function () {

    $user = User::findOrFail(1);

    return $user->address->name;

});


Route::get('/delete', function () {

    $user = User::findOrFail(1);

    $user->address()->delete();

});