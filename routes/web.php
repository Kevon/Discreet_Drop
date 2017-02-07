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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/', 'Controller@index');

Route::get('/dashboard', 'Controller@dashboard');

Route::get('/tutorial', 'Controller@tutorial');

Route::get('/profile_info', 'Controller@profile_info');

Route::post('/profile_info/update', 'Controller@updateProfile');

Route::get('/login_info', 'Controller@login_info');

Route::post('/login_info/update', 'Controller@updateInfo');

Route::post('/dashboard/addOrder', 'Controller@addOrder');
