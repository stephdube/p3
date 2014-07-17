@extends('_master')

@section('content')

<?php


	// if text generator has been requested via form submission... 
	if (Input::has("text")){
		echo "<h3>Random Text</h3>";
			$paragraphs = Input::get("paragraph_number");
			for($i=0;$i<$paragraphs;$i++){
				echo "<p>".$faker->text($maxNbChars = 200).
				$faker->paragraph($nbSentences = 3).
				"</p>";
			}
		}
	?>

	<?php

		// if user generator has been requested via form submission...
		if (Input::has("users"))
		{
			echo "<h3>User List</h3>";
			// Remember how many users we need
			$number = Input::get("user_number");

			// Load json file of users
			$userlist = File::get(app_path().'\database\users.json');

			// convert to json
			$userlist = json_decode($userlist,true);

			// start listing user list
			echo'<ul>';

			$i = 0; // counter for tracking number of users
			// produce as many users as specified
			while ($i < $number){
				foreach($userlist as $user){
					echo '<li>'.$user['firstname'].' '.$user['lastname'].'<br>'
					."Age: " . $user['age']
					.'</li>';
					$i++;
				}
			}
			echo'</ul>';		
		};
	?>

@stop