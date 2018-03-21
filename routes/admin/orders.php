<?php

use Illuminate\Support\Facades\Route;

Route::resource('orders', 'OrderController');
Route::resource('order-statuses', 'OrderStatusController');
Route::get('orders/{id}/invoice', 'OrderController@generateInvoice')->name('orders.invoice.generate');
