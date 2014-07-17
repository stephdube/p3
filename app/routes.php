<?php
	// Home page/display form
	Route::get('/', function()
	{
		return View::make('index');
	});

	// Process form and display results
	Route::post('/generated', function()
	{
		$faker = Faker\Factory::create();
		return View::make('generated')
		->with('faker', $faker);
	});
?>