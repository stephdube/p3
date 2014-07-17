@extends('_master')

@section('header')
	<h1>A Best Friend For Developers</h1>
	<h3>Generate random text or user data to populate your database</h3>
@stop

<!--Form for requesting text/user data-->
@section('form')
<form method="POST" action ="/">
	<b>What do you need?</b><br>
	Generate text
	<input type="checkbox" onclick="text()" id="textCheck"><br>
	<div id="text_form"><!--Placeholder--></div>
	Generate users
	<input type="checkbox" onclick="users()" id="usersCheck"><br>
	<div id="user_form"><!--Placeholder--></div>
	<input type="submit" value="Submit"></br>
	</form>
@stop

<!--Form is extended when "Text" or "Users" boxes are checked-->
@section('script')
<script>
function text(){
	document
	.getElementById("text_form")
	.innerHTML="<ul><li>Select number of paragraphs:<select name ='paragraph_number'><?php for ($i = 1; $i < 10; $i++):?><option value='<?php echo $i;?>'><?php echo $i;?></option><?php endfor;?></select></ul>";
}
function users(){
	document
	.getElementById("user_form")
	.innerHTML="<ul><li>Select number of users:<select name='user_number'><?php for ($i = 1; $i < 100; $i++):?><option value='<?php echo $i;?>'><?php echo $i;?></option><?php endfor;?></select></li></ul>";
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
	echo "<h3>User List</h3>".'<ul>';

	// produce as many users as specified
	for ($i=0; $i<$users; $i++)
	{
		echo '<li>';
		echo $faker->name;	
		echo '</li>';
	};
	echo '</ul>';
}
?>
@stop

