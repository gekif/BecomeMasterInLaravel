<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>'admin'], function(){

    Route::get('/admin', function(){

        return view('admin.index');


    });



    Route::resource('admin/users', 'AdminUsersController',['names'=>[


        'index'=>'admin.users.index',
        'create'=>'admin.users.create',
        'store'=>'admin.users.store',
        'edit'=>'admin.users.edit'






    ]]);


    Route::get('/post/{id}', ['as'=>'home.post', 'uses'=>'AdminPostsController@post']);

    Route::resource('admin/posts', 'AdminPostsController',['names'=>[

        'index'=>'admin.posts.index',
        'create'=>'admin.posts.create',
        'store'=>'admin.posts.store',
        'edit'=>'admin.posts.edit'





    ]]);

    Route::resource('admin/categories', 'AdminCategoriesController',['names'=>[


        'index'=>'admin.categories.index',
        'create'=>'admin.categories.create',
        'store'=>'admin.categories.store',
        'edit'=>'admin.categories.edit'


    ]]);

    Route::resource('admin/media', 'AdminMediasController',['names'=>[

        'index'=>'admin.media.index',
        'create'=>'admin.media.create',
        'store'=>'admin.media.store',
        'edit'=>'admin.media.edit'


    ]]);


    Route::resource('admin/comments', 'PostCommentsController',['names'=>[


        'index'=>'admin.comments.index',
        'create'=>'admin.comments.create',
        'store'=>'admin.comments.store',
        'edit'=>'admin.comments.edit',
        'show'=>'admin.comments.show'


    ]]);


    Route::resource('admin/comment/replies', 'CommentRepliesController',['names'=>[



        'index'=>'admin.replies.index',
        'create'=>'admin.replies.create',
        'store'=>'admin.replies.store',
        'edit'=>'admin.replies.edit'


    ]]);





});



//
///*
//|--------------------------------------------------------------------------
//| Application Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register all of the routes for an application.
//| It's a breeze. Simply tell Laravel the URIs it should respond to
//| and give it the controller to call when that URI is requested.
//|
//*/
//
//Route::get('/', function () {
//    return view('welcome');
//});
//
//
//Route::auth();
//
//
//Route::get('/home', 'HomeController@index');
//
//Route::get('/post/{id}', [
//    'as' => 'home.post',
//    'uses' => 'AdminPostsController@post'
//]);
//
//Route::get('/admin', function () {
//    return view('admin.index');
//});
//
//
//Route::group(['middleware' => 'admin'], function () {
//    Route::resource('admin/users', 'AdminUsersController');
//
//    Route::resource('admin/posts', 'AdminPostsController');
//
//    Route::resource('admin/categories', 'AdminCategoriesController');
//
//    Route::resource('admin/media', 'AdminMediasController');
//
//    Route::resource('admin/comments', 'PostCommentsController');
//
//    Route::resource('admin/comment/replies', 'CommentRepliesController');
//
//});
//
//
//Route::group(['middleware' => 'auth'], function () {
//    Route::post('comment/reply', 'CommentRepliesController@createReply');
//
//
//});
//
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index');
