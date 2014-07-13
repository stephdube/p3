@extends('_master')

@section('content')
	<h1>Welcome!</h1>
	<p>What do you need?</p>
	<form method="POST" action ="/text">
		Generate text?<input type="checkbox" name="text">
			<ul>
				<li>Select number of paragraphs: 
					<select>
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
		Generate users?<input type="checkbox" name="users">
			<ul>
				<li>Select number of users: 
					<select>
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