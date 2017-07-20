<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Prueba Correos</title>
</head>
<body>
	
	<h2>Nombre: {{ $datos['nombre'] }}</h2>
	<h2>Correo: {{ $datos['correo'] }}</h2>
	<h2>Contenido:</h2>
	<p>
		{{ $datos['contenido'] }}
	</p>

</body>
</html>