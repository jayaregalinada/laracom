<?php

use Illuminate\Support\Facades\Route;

Route::resource('categories', 'CategoryController');
Route::get('remove-image-category', 'CategoryController@removeImage')->name('category.remove.image');
