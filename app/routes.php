<?php


Route::get('/', 'PageController@home');

Route::get('/search', 'PageController@search' );

Route::get('/instances','PageController@instances');

Route::resource('organizations', 'OrganizationController');

