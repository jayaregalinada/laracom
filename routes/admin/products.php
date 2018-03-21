<?php

use Illuminate\Support\Facades\Route;

Route::resource('products', 'ProductController');
Route::get('remove-image-product', 'ProductController@removeImage')->name('product.remove.image');
Route::get('remove-image-thumb', 'ProductController@removeThumbnail')->name('product.remove.thumb');
