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

Route::get('/', 'WebController@index')->name('home');
Route::get('home/{locale}/', 'WebController@index')->name('home.locale');
Route::get('{locale}/categori', 'WebController@categori')->name('home.categori');
Route::get('{locale}/categori/type/', 'WebController@type')->name('home.type');
Route::get('{locale}/serch-form/', 'WebController@serchForm')->name('home.form.serch');
Route::post('{locale}/serch/', 'WebController@serach')->name('home.serach');

Route::post('{locale}/serchtop/', 'WebController@serchtop')->name('home.serchtop');


Route::namespace('\App\Http\Controllers\frontend\Auth')->group(function () {
// Authentication Routes...
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout')->name('logout');
// Registration Routes...
    Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'RegisterController@register');
// Password Reset Routes...
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');
// Email Verification Routes...
    Route::get('email/verify', 'VerificationController@show')->name('verification.notice');
    Route::get('email/verify/{id}', 'VerificationController@verify')->name('verification.verify');
    Route::get('email/resend', 'VerificationController@resend')->name('verification.resend');
//Route::get('/home', 'HomeController@index')->name('home');

});

