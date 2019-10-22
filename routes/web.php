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

Route::get('/', 'LoginController@indexLogin');
Route::get('/register', 'LoginController@indexRegister');

Route::get('/home', 'HomeController@indexHome');
Route::get('/pertama', 'HomeController@indexPertama');
Route::get('/kedua', 'HomeController@indexKedua');
Route::get('/ketiga', 'HomeController@indexKetiga');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });