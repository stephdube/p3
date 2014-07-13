<?php

// Just a testing space -- will probably delete
Route::get('/practice', function()
{
	echo 'Hello World';
});

// Landing page/Homepage
Route::get('/', function()
{
	return View::make('index');
});

// Text generator
Route::get('/text', function()
{
	return View::make('text');
});

Route::post('/text', function()
{
	return View::make('text');
});

// User generator
Route::get('/users/{number?}', function($number = '3')
{
	return View::make('users')->with('number', $number);
});


