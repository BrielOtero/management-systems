<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<h1>Rellena el siguiente formulario</h1>
	<form action="values.php" method="post">
		<p>Nombre: <input type="text" name="nombre"></p>
		<p>Apellidos: <input type="text" name="apellidos"></p>
		<p>Email: <input type="email" name="email"></p>
		<p>Contraseña: <input type="password" name="contraseña"></p>

		<p>Sexo</p>
		<p><input type="radio" name="sexo" id="sexo">Varón</p>
		<p><input type="radio" name="sexo" id="sexo">Mujer</p>

		<p>Interesado en los siguientes temas:</p>
		<p><input type="checkbox" name="musica" id="musica">Musica</p>
		<p><input type="checkbox" name="deportes" id="deportes">Deportes</p>
		<p><input type="checkbox" name="cine" id="cine">Cine</p>
		<p><input type="checkbox" name="libros" id="libros">Libros</p>
		<p><input type="checkbox" name="ciencia" id="ciencia">Ciencia</p>
		<p><input type="submit" value="enviar"></p>
	</form>
</body>
</html>