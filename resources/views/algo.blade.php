<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Esto es una vista de prueba</title>
</head>
<body>
	<h1>Vista "algo"</h1>
	<p>Esta es mi primera vista en Laravel</p>
    <!-- con $nombre as escrito traigo el parametro de la routa en la vista -->
    {{ $nombre}}
    <h2>{{ $nombre}}</h2>
    <h3>{{ $nombre}}</h3>

    <a href="{{ route('ruta.home') }}">ruta asia home</a>
    <h3>{{ $a}}</h3>
    <a href="{{ route('ruta.borrar') }}">ruta asia destroy</a>
</body>
</html>
