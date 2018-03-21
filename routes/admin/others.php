<?php

Route::resource('addresses', 'Addresses\AddressController');
Route::resource('countries', 'Countries\CountryController');
Route::resource('countries.provinces', 'Provinces\ProvinceController');
Route::resource('countries.provinces.cities', 'Cities\CityController');
Route::resource('couriers', 'Couriers\CourierController');
Route::resource('attributes', 'Attributes\AttributeController');
Route::resource('attributes.values', 'Attributes\AttributeValueController');
