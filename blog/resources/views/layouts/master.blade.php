<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GJ -  Blog</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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