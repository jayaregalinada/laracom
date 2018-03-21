<?php

use Illuminate\Support\Facades\Route;

Route::resource('employees', 'EmployeeController');
Route::get('employees/{id}/profile', 'EmployeeController@getProfile')->name('employee.profile');
Route::put('employees/{id}/profile', 'EmployeeController@updateProfile')->name('employee.profile.update');
