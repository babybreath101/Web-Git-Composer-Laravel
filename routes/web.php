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

// Route::get('/dashboard', function () {
//      return view('dashboard');
//  });

Route::get('/', 'loginController@indexLogin');
Route::get('/Register', 'loginController@indexRegister');
Route::get('/indexHome', 'homeController@indexHome');
Route::get('/indexHalamanPertama', 'homeController@indexHalamanPertama');
Route::get('/indexHalamanKedua', 'homeController@indexHalamanKedua');
Route::get('/indexHalamanKetiga', 'homeController@indexHalamanKetiga');




