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

Route::prefix('admin')->namespace('Admin')->group(function () {
    // Auth
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout');


});

Route::prefix('entreprise')->namespace('Entreprise')->group(function(){
    // Auth
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('entreprise.login');
    Route::post('login', 'Auth\LoginController@login')->name('entreprise.login');
    Route::post('logout', 'Auth\LoginController@logout');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('entreprise.register');
    Route::post('register', 'Auth\RegisterController@register');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('entreprise.password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('entreprise.password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');


});

Route::prefix('client')->namespace('Client')->group(function(){
    // Auth
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('client.login');
    Route::post('login', 'Client\Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('client.password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('client.password.request');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');


});
