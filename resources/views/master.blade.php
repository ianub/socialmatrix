<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	{{-- font awesome --}}
	<script src="https://use.fontawesome.com/8f9516a9ab.js"></script>

</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top">
		<a class="navbar-brand" href="#"><img src="/images/smlogo.png"></a>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="{{ url('/home') }}">HOME</a></li>
			<li><a href="{{ url('/team') }}">TEAM</a></li>
			<li><a href="{{ url('/services') }}">SERVICES</a></li>
			<li><a href="{{ url('/prices') }}">PRICES</a></li>
			<li><a href="{{ url('/login') }}">LOGIN</a></li>
			<li><a href="{{ url('/register') }}">REGISTER</a></li>
		</ul>
	</nav>

	@yield('content')

	<footer>
		<div class="footer-box">
			<div>
				<p>GET IN TOUCH</p>
				<P></P>
			</div>
			<div>
				<a href=""><img src="images/facebook.png"></a>
				<a href=""><img src="images/instagram.png"></a>
				<a href=""><img src="images/tumblr.png"></a>
				<a href=""><img src="images/youtube.png"></a>
			</div>
			<div>
				<p>&copy; 2017 SOCIAL MATRIX ALL RIGHTS RESERVED</p>
			</div>
		</div>
	</footer>

</body>
</html>