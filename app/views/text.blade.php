@extends('_master')

@section('content')
	<h1>Generate some text</h1>
		<form method="POST" action ="/text">
			Select number of paragraphs: 
			<select>
				<?php for ($i = 1; $i < 10; $i++):?>
					<option value="<?php echo $i;?>"><?php echo $i;?></option>
				<?php endfor;?>
			</select><br>
			Select data type:
			<select>
				<option value="html">HTML</option>
				<option value="json">JSON</option>
			</select><br>
			<input type="submit" value="Submit"></br>
		</form>
@stop