@extends('_master')

@section('header')
	<h1>A Best Friend For Developers</h1>
	<h3>Generate random text or user data to populate your database</h3>
@stop

<!--Form for requesting text/user data-->
@section('form')
<form method="POST" action ="/">
	<b>What do you need?</b><br>
	Generate random text
	<input type="checkbox" onclick="text()" id="textCheck"><br>
	<p id="text_form"><!--Placeholder--></p>
	Generate random user data
	<input type="checkbox" onclick="users()" id="usersCheck"><br>
	<p id="user_form"><!--Placeholder--></p>
	<input type="submit" value="Submit"></br>
</form>
@stop

<!--Form is extended when "Text" or "Users" boxes are checked-->
@section('script')
<script>
function text(){
	document
	.getElementById("text_form")
	.innerHTML="I want <select name ='paragraph_number'><?php for ($i = 0; $i < 10; $i++):?><option value='<?php echo $i;?>'><?php echo $i;?></option><?php endfor;?></select> paragraphs";
}
function users(){
	document
	.getElementById("user_form")
	.innerHTML="I want <select name='user_number'><?php for ($i = 0; $i < 100; $i++):?><option value='<?php echo $i;?>'><?php echo $i;?></option><?php endfor;?></select> users<br><input type='radio' name='name' value='first_name'>First name <input type='radio' name='name' value='full_name'>Full name <input type='radio' name='name' value='user_name'>User name<br>Address<input type='checkbox' name='address'><br>Birthdate<input type='checkbox' name='birthdate'><br>Company<input type='checkbox' name='company'><br>Picture<input type='checkbox' name='picture'><br>";
}
</script>
@stop

<!--Random text is generated here, if requested-->
@section('text')
<?php
$paragraphs = Input::get("paragraph_number");
if ($paragraphs>0)
{
	echo "<h3>Random Text</h3>";
	for($i=0;$i<$paragraphs;$i++)
	{
		echo "<p>".$faker->text($maxNbChars = 200).
		$faker->paragraph($nbSentences = 3)."</p>";
	}
}
?>
@stop

<!--User data generated here-->
@section('users')
<?php
$users = Input::get("user_number");
if ($users>0)
{
	echo "<h3>User List</h3>".'<ol>';

	// produce as many users as specified
	for ($i=0; $i<$users; $i++)
	{
		echo '<li>';
		switch(Input::get("name")){
			case "full_name":
				echo "<b>Name:</b> ".$faker->name."<br>";	
				break;
			case "first_name":
				echo "<b>Name:</b> ".$faker->firstName."<br>";	
				break;
			case "user_name":
				echo "<b>Username:</b> ".$faker->userName."<br>";
				break;
			default:
		}
		if(Input::get("address")){
			echo "<b>Address:</b> ".$faker->address."<br>";
		}
		if(Input::get("birthdate")){
			echo "<b>Birthdate:</b> ".$faker->date($format = 'Y-m-d', $max = 'now')."<br>";
		}
		if(Input::get("company")){
			echo "<b>Company:</b> ".$faker->company."<br>";
		}
		if(Input::get("picture")){
			echo "<img src='".$faker->imageUrl(100, 100, 'cats')."'><br>";
		}
		echo '</li><br>';
	};
	echo '</ol>';
}
?>
@stop

