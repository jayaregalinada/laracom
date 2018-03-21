<?php

Route::get('/', 'CheckoutController@index')->name('index');
Route::post('/', 'CheckoutController@store')->name('store');
Route::get('execute', 'CheckoutController@executePayPalPayment')->name('execute');
Route::post('execute', 'CheckoutController@charge')->name('execute');
Route::get('cancel', 'CheckoutController@cancel')->name('cancel');
Route::get('success', 'CheckoutController@success')->name('success');
