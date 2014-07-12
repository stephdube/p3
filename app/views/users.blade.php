@extends('_master')

@section('title')
	Users!!
@stop

@section('content')
	<p>Generate some sample users to populate a database</p>

<?php 

	// Load json file of users
	$userlist = File::get(app_path().'\database\users.json');

	// convert to json
	$userlist = json_decode($userlist,true);

	// start list of user list
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
		
?>

@stop