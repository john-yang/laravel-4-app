<?php


Route::get('/', 'PageController@home');

Route::get('/search', 'PageController@search' );

Route::resource('instances','InstanceController');

Route::get('organizations/accounts/{organization_id}','OrganizationController@accounts');
Route::get('organizations/instances/{organization_id}','OrganizationController@instances');
Route::resource('organizations', 'OrganizationController');

Route::resource('accounts','AccountController');



Route::group(array('prefix' => 'admin','before' => 'auth'), function()
{
	Route::get('', function()
	{

		return View::make('admin.dashboard');

	})->before('auth');

	Route::get('add-organization', function()
	{
		return View::make('admin.add-organization');

	})->before('auth');

});

Route::resource('session','SessionController');
Route::get('login','SessionController@create');
Route::get('logout','SessionController@destroy');

