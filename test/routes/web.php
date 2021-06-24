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
    return view('home');
})->name('home');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/feedback', function () {
    return view('feedback');
})->name('feedback');

Route::get('/contact/all', 'App\Http\Controllers\ContactController@allData')->name('contact-data')->middleware('auth');

Route::post('/contact/submit', 'App\Http\Controllers\ContactController@submit')->name('contact-form');

Route::get('/contact/all{id}', 'App\Http\Controllers\ContactController@ShowOneMessage')->name('contact-data-one')->middleware('auth');

Route::get('/contact/all{id}/update', 'App\Http\Controllers\ContactController@UpdateMessage')->name('contact-update')->middleware('auth');

Route::post('/contact/all{id}/update', 'App\Http\Controllers\ContactController@UpdateMessageSubject')->name('contact-update-submit')->middleware('auth');

Route::get('/contact/all{id}/delete', 'App\Http\Controllers\ContactController@deleteMessage')->name('contact-delete')->middleware('auth');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
