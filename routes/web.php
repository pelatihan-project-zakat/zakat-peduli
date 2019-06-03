<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->group(function(){
    Route::get('/dashboard', function ()
    {
        return view('admin.index');
    })->name('admin.index');

    Route::resource('category', 'Admin\DonationcategoryController');

    Route::resource('program', 'Admin\DonationprogramController');

    Route::resource('mustahiq', 'Admin\MustahiqController');

    Route::resource('transaction', 'Admin\TransactionController');
    Route::get('/transaction/success', function(){
        return view('admin.transaction.success');
    })->name('transaction.success');

    Route::get('/donor', 'Admin\DonorController@index')->name('donor.index');
});