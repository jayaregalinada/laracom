<?php

use Illuminate\Support\Facades\Route;

Route::get('category/{slug}', 'CategoryController@getCategory')->name('category.slug');
Route::get('{product}', 'ProductController@show')->name('get.product');
