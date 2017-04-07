<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" ref="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<nav>
	<ul>
		<li><a href="{{ url('/home') }}">Home</a></li>
		<li><a href="{{ url('/team') }}">Team</a></li>
		<li><a href="{{ url('/services') }}">Services</a></li>
		<li><a href="{{ url('/prices') }}">Prices</a></li>
		<li><a href="{{ url('/login') }}">Login</a></li>
		<li><a href="{{ url('/register') }}">Register</a></li>
	</ul>
</nav>
                  
                

	@yield('content')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	

</body>
</html>