<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GJ -  Blog</title>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
</head>
<body>

	<header>
		@include('layouts.navbar')	
	</header>

	<main class="container">
		@yield('content')
	</main>

	<footer>
		@include('layouts.footer')
	</footer>
	
</body>
</html>