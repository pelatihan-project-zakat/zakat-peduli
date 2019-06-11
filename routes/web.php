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

Route::get('/home/index', function () {
    return view('index.index');
});

Route::get('/', function () {
    return view('landing');
});

Route::get('/donations', function () {
    return view('admin.donations.create');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {

    Route::resource('donations', 'Admin\DonationController');
    Route::resource('banks', 'Admin\BankController');
    Route::resource('programs', 'Admin\ProgramController');
});
