<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>

	<h1>Formulario de subscripción a nuestras publicaciones:</h1>

	<form action="data.php" method="post">
		<p>Nombre:<input type="text" name="nombre"></p>
		<p>Primer Apellido:<input type="text" name="apellido1" ></p>
		<p>Segundo Apellido:<input type="text" name="apellido2" ></p>
		<p>Correo Electrónico:<input type="email" name="email" ></p>
		<p></p>
		<p></p>

		<h3>Desea recibir información sobre las publicaciones?</h3>
		<p><input type="radio" name="info" id="info">Si,estoy interesado</p>
		<p><input type="radio" name="info" id="info">No,gracias</p>


		<p>Publicaciones disponibles:</p>
		<p><input type="checkbox" name="publi" value="National Geographic">National Geographic</p>
		<p><input type="checkbox" name="publi" value="Electronic Letters">Electronic Letters</p>
		<p><input type="checkbox" name="publi" value="Conocer">Conocer</p>
		<p><input type="checkbox" name="publi" value="Science">Science</p>
		<p><input type="checkbox" name="publi" value="Desarrollo Web">Desarrollo Web</p>

		<p>Formas de subscripción:
			<select name="sub" id="sub">
				<option value="" selected disabled hidden>-Elegir-</option>
				<option value="si">semanal</option>
				<option value="no">mensual</option>
				<option value="no">anual</option>
			</select>
		</p>
		<p><input type="submit" value="Subscribirme"></p>
	</form>

</body>

</html>