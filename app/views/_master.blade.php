<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'A Best Friend for Developers!')</title>
	<link rel="stylesheet" href="p3style.css" type="text/css">
</head>

<body>
<div id="header">
	@yield('header')
</div>
<div id="form">
	@yield('form')	
</div>
<div id="generated">
	@yield('text')

	@yield('users')
</div>
	@yield('script')
</body>
<footer></footer>
</html>
