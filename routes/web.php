<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CahierController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\IsAdmin;
 




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
Route::redirect('/', '/Cahiers');
Route::resource('Cahiers', CahierController::class)->middleware('auth');;
//Route::get('client','index' )->middleware(['auth','IsClient']);
//Route::get('Cahiers', [App\Http\Controllers\CahierController@index]);
//Route::get('/Cahiers', 'CahierController@index');


// Route::get('table', function () {
//     return view('table')->middleware(['auth','IsClient']);
// });
//Route::view('/table', 'table')->middleware(['auth','IsClient']);
//Route::view('/admin', 'admin')->middleware('auth');
//Route::view('/student', 'student')->middleware('auth');



Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout'); 
  
// /* Registration Routes... */
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
  
// /* Password Reset Routes... */
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
  
// /* Email Verification Routes... */
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
