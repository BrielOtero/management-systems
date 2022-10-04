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
		<p>Email: <input type="email" name="email"></p>
		<p>Teléfono: <input type="tel" name="telefono"></p>
		<p>Mensaje: <textarea name="mensaje" cols="30" rows="10"></textarea></p>
		<p><input type="submit" value="enviar"></p>
	</form>

</body>

</html>