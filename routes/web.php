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

Route::get('/', 'HomeController@home');

//Auth::routes();
//
//Route::get('login/facebook', 'Auth\AuthController@redirectToFacebook');
//Route::get('login/facebook/callback', 'Auth\AuthController@getFacebookCallback');
//
//Route::get('/home', 'HomeController@index');


Route::get('/dash', 'PostController@index');

Route::get('image-gallery', 'ImageGalleryController@index');

Route::post('image-gallery', 'ImageGalleryController@upload');

Route::delete('image-gallery/{id}', 'ImageGalleryController@destroy');