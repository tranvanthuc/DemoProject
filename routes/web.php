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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo', function () {
    return "Hello World";
});

Route::get('user/{username}', function ($username) {
    return "Username: " . $username;
});

Route::get('/demo', function () {
    return "Hello World";
});

Route::get('/test', 'TestController@index');
Route::get('/test/view-share', 'TestController@viewShare');
