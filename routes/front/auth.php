<?php

use Illuminate\Support\Facades\Route;

Route::get('accounts', 'AccountsController@index')->name('accounts');
Route::resource('customer.address', 'CustomerAddressController');
