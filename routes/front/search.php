<?php

use Illuminate\Support\Facades\Route;

Route::get('search', 'ProductController@search')->name('product');
