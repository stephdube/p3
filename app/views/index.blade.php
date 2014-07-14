@extends('_master')

@section('content')
	<div id="header">
		<h1>A Best Friend For Developers</h1>
		<h3>Generate random text or user data to populate your database</h3>
	</div>
	<form method="POST" action ="/generated">
		<b>What do you need?</b><br>
		Generate text<input type="checkbox" name="text">
			<ul>
				<li>Select number of paragraphs: 
					<select name ='paragraph_number'>
					<?php for ($i = 1; $i < 10; $i++):?>
						<option value='<?php echo $i;?>'><?php echo $i;?></option>
					<?php endfor;?>
				</select>
				</li>
				<li>Select data type:
					<select>
						<option value="html">HTML</option>
						<option value="json">JSON</option>
					</select>
				</li>
			</ul>
		Generate users<input type="checkbox" name="users">
			<ul>
				<li>Select number of users: 
					<select name="user_number">
					<?php for ($i = 1; $i < 10; $i++):?>
						<option value="<?php echo $i;?>"><?php echo $i;?></option>
					<?php endfor;?>
				</select>
				</li>
				<li>Select data type:
					<select>
						<option value="html">HTML</option>
						<option value="json">JSON</option>
					</select>
				</li>
			</ul>
		<input type="submit" value="Submit"></br>
	</form>

@stop
