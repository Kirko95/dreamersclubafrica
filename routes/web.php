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

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');

    return "Cleared!";
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('reasons', function () {
    return view('pages/reasons');
});

Route::get('about', function () {
    return view('pages/about');
});

Route::get('contact', function () {
    return view('pages/contact');
});

Route::get('register', function () {
    return view('pages/register');
});

Route::get('events', function () {
    return view('pages/event');
});

Route::get('programs', function () {
    return view('pages/programs');
});

Route::get('gallery', function () {
    return view('pages/gallery');
});

Route::get('/packages/school', function () {
    return view('packages/school');
});

Route::get('/packages/home', function () {
    return view('packages/home');
});

Route::get('/packages/weekend', function () {
    return view('packages/weekend');
});

Route::get('/packages/holiday', function () {
    return view('packages/holiday');
});

Route::post('register', 'RegisterController@store')->name('register');
Route::post('quote', 'QuoteController@store')->name('quote');
