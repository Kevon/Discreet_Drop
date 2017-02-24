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
Route::get('/how-it-works', 'Controller@howItworks');
Route::get('/faq', 'Controller@faq');
Route::get('/about', 'Controller@about');
Route::get('/contact', 'Controller@contact');
Route::get('/pricing-calculator', 'Controller@pricingCalculator');
Route::get('/tutorial', 'Controller@tutorial');
Route::post('/pricing-calculator/submit', 'Controller@getRate');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'Controller@dashboard');
    
    Route::get('/profile_info', 'Controller@profile_info');
    Route::patch('/profile_info/update', 'Controller@updateProfile');

    Route::get('/login_info', 'Controller@login_info');
    Route::patch('/login_info/update', 'Controller@updateInfo');
    Route::delete('/login_info/update', 'Controller@deleteUser');

    Route::post('/dashboard/addOrder', 'Controller@addOrder');
    Route::delete('/dashboard/deleteOrder/{Order}', 'Controller@deleteOrder');
});

Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin', 'AdminController@index');
    Route::get('/admin/incoming_package', 'AdminController@newIncomingPackage');
    
    Route::post('/admin/incoming_package/save', 'AdminController@saveIncomingPackage');
    
    Route::get('/admin/outgoing_package/{Order}', 'AdminController@outgoingPackagePanel');
});
