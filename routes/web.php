<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/',[
    'uses'=>'HomeController@getWelcome',
    'as'=>'/'
]);

Route::get('/getAllPost', [
    'uses'=>'JibcController@getAllPost',
    'as'=>'allPost'
]);

Route::post('/newUploadPost',[
    'uses'=>'JibcController@postNewUploadPost',
    'as'=>'new.uploadPost'
]);

Route::get('/post-image/{img_name}', [
    'uses'=>'HomeController@getPostImage',
    'as'=>'view.image'
]);

Route::get('/post/delete',[
    'uses'=>'TravelController@getDeletePost',
    'as'=>'remove.uploadPost'
]);
