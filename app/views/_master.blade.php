<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'A Best Friend for Developers!')</title>
	<link rel="stylesheet" href="p3style.css" type="text/css">
</head>

<body>
<div id="container">
	<div id="header">@yield('header')</div>
		@yield('form')
	<div id="generated">
		@yield('text')
		@yield('users')
	</div>
</div><!--end container-->
	@yield('script')
</body>
<footer>Stephanie Dube for DWA-15 (Summer 2014)</footer>
</html>
