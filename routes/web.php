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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::post('/signup','UserController@postSignUp')->name('signup');
Route::post('/signin','UserController@postSignIn')->name('signin');
Route::get('/logout', 'UserController@getLogout')->name("logout");
Route::get('/account', 'UserController@getAccount')->name('account');
Route::post('/updateaccount','UserController@postSaveAccount')->name('account.save');
Route::get('/userimage/{filename}','UserController@getUserImage')->name('account.image');
Route::get('/dashboard','PostController@getDashboard')->name('dashboard')->middleware('auth');
Route::post('/createpost','PostController@postCreatePost')->name('post.create')->middleware('auth');
Route::get('/post-delete/{post_id}','PostController@getDeletePost')->name('post.delete')->middleware('auth');
Route::post('/edit', 'PostController@postEditPost')->name('edit');
Route::post('/like', 'PostController@postLikePost')->name('like');