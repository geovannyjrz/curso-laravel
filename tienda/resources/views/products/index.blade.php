<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Productos</title>
</head>
<body>
	<h1>Lista de productos</h1>
	<ul>

		@foreach($products as $product)
		<li>
			<a href="/detalle/{{$product->id}}">{{$product->descripcion}}</a>
		</li>
		@endforeach

	</ul>
</body>
</html>