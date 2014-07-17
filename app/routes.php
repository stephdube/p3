<?php
	// Home page/display form
	Route::get('/', function()
	{
		return View::make('index');
	});

	// Process form and display results
	Route::post('/', function()
	{
		$faker = Faker\Factory::create();
		return View::make('index')
		->with('faker', $faker);
	});
?>