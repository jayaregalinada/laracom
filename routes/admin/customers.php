<?php

use Illuminate\Support\Facades\Route;

Route::resource('customers', 'CustomerController');
Route::resource('customers.addresses', 'CustomerAddressController');
