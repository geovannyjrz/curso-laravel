<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tareas</title>
</head>
<body>
	<ul>
	<!--
	<?php foreach ($tareas as $tarea): ?>
		<li><?php echo $tarea; ?></li>
	<?php endforeach ?>
-->

@foreach($tareas as $tarea)
<li>
	{{$tarea->titulo}}
</li>
@endforeach

</ul>
</body>
</html>