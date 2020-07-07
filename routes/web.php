<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [
    'uses' => 'BookController@getIndex',
    'as' => 'book.index'
]);

Route::get('/signup', [
    'uses' => 'UserController@getSignUp',
    'as' => 'user.getsignup'
]);

Route::post('/signup', [
    'uses' => 'UserController@postSignUp',
    'as' => 'user.postsignup'
]);

Route::get('/signin', [
    'uses' => 'UserController@getSignIn',
    'as' => 'user.getsignin'
]);

Route::post('/signin', [
    'uses' => 'UserController@postSignIn',
    'as' => 'user.postsignin'
]);

Route::get('/user/profile', [
    'uses' => 'UserController@getProfile',
    'as' => 'user.profile'
]);