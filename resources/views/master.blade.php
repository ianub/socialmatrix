<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/bootstrap/style.css">

</head>
<body>

	<nav class="navbar navbar-default">
		<a class="navbar-brand" href="#">{{-- <img src="/images/smlogo.png"> --}}</a>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="{{ url('/home') }}">Home</a></li>
			<li><a href="{{ url('/team') }}">Team</a></li>
			<li><a href="{{ url('/services') }}">Services</a></li>
			<li><a href="{{ url('/prices') }}">Prices</a></li>
			<li><a href="{{ url('/login') }}">Login</a></li>
			<li><a href="{{ url('/register') }}">Register</a></li>
		</ul>
	</nav>

	@yield('content')

</body>
</html>