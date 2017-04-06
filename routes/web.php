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
Route::get('/privacy-policy', 'Controller@privacyPolicy');
Route::get('/trust-and-safety', 'Controller@trustAndSafety');
Route::get('/press-and-style-guide', 'Controller@pressAndStyleGuide');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'Controller@dashboard');
    
    Route::get('/profile-info', 'Controller@profile_info');
    Route::patch('/profile-info/update', 'Controller@updateProfile');

    Route::get('/login-info', 'Controller@login_info');
    Route::patch('/login-info/update', 'Controller@updateInfo');
    Route::delete('/login-info/update', 'Controller@deleteUser');

    Route::post('/dashboard/addOrder', 'Controller@addOrder');
    Route::delete('/dashboard/deleteOrder/{order}', 'Controller@deleteOrder');
});

Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin', 'AdminController@index');
    Route::get('/admin/incoming_package', 'AdminController@newIncomingPackage');
    Route::get('/admin/incoming_package/{incoming_package}', 'AdminController@editIncomingPackage');
    
    Route::post('/admin/incoming_package/save', 'AdminController@saveIncomingPackage');
    Route::patch('/admin/incoming_package/{incoming_package}/save', 'AdminController@modifyIncomingPackage');
    
    Route::get('/admin/users', 'AdminController@usersList');
    Route::get('/admin/users/{user}', 'AdminController@userPanel');
    Route::get('/admin/orders', 'AdminController@ordersList');
    Route::get('/admin/orders/{order}', 'AdminController@orderPanel');
    Route::post('/admin/orders/{order}/process_order', 'AdminController@processOrder');
});
