<?php



/*Route::group(['middleware' => 'web'], function () {

    Route::resource('/posts', 'PostsController');

    Route::get('/dates', function () {

        $date = new DateTime('+1 week');

        echo $date->format('m-d-Y');

    });

});*/

use App\User;
use Carbon\Carbon;

Route::resource('/posts', 'PostsController');


Route::get('/dates', function () {

    $date = new DateTime('+1 week');

    echo $date->format('m-d-Y');
    echo '<br>';

    echo Carbon::now();
    echo '<br>';

    echo Carbon::now()->diffForHumans();
    echo '<br>';

    echo Carbon::now()->addDays(10)->diffForHumans();
    echo '<br>';

    echo Carbon::now()->subMonths(5)->diffForHumans();
    echo '<br>';

    echo Carbon::now()->yesterday()->diffForHumans();
    echo '<br>';

});


Route::get('/getname', function () {

    $user = User::find(2);

    echo $user->name;

});