<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Formulario</title>
</head>

<body>
	<form action="manejar_formulario.php" method="post">
		<p> Nombre: <select name="tratamiento">
				<option value="Sr.">Sr.</option>
				<option value="Sra.">Sra.</option>
				<option value="Srta.">Srta.</option>
			</select>
			<input type="text" name="nombre" size="20" />
		</p>
		<p>Dirección de correo electrónico <input type="text" name="email" size="20" /></p>
		<p>Valoración</p>
		<input type="radio" name="respuesta" value="excelente" />Excelente
		<input type="radio" name="respuesta" value="normal" />Normal
		<input type="radio" name="respuesta" value="malo" />Malo
		<p>Comentarios <textarea name="comentarios" rows="4" cols="40"></textarea></p>
		<input type="submit" name="enviar" value="Enviar mi respuesta" />
	</form>
</body>

</html>