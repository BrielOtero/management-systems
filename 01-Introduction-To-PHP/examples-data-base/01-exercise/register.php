<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
</head>

<body>

	<?php
	$conexion = mysqli_connect("localhost", "root");
	mysqli_select_db($conexion, "usuariosbd");

	$error = false;

	if (!empty($_POST["name"]) && !empty($_POST["surname"]) && !empty($_POST["email"])) {
		$name = trim($_POST["name"]);
		$surname = trim($_POST["surname"]);
		$email = trim($_POST["email"]);
	} else {
		print "<p style=\"color:red;\">Values are not valid</p>";
		$error = true;
	}

	$queryUser = "SELECT * FROM usuarios";
	$users = mysqli_query($conexion, $queryUser);

	if (empty($users)) {
		print "Don't are valid users";

	}else{

		while ($fila =mysqli_fetch_array($users)){
			if($fila["Nombre"]==$name && $fila["Apellidos"]==$surname){
				print "Existe un usuario con este nombre \\ apellido";
				$error =true;
				break;
			}

			if($fila["Correo"]==$email){
				print "Existe un usuario con este correo";
				$error =true;
				break;
			}

		}
	}

	if (!$error) {

		$query = "INSERT INTO usuarios (id,Nombre,Apellidos,Correo) VALUES (0,'$name','$surname','$email')";

		if (mysqli_query($conexion, $query)) {
			print "<p>OK</p>";
		} else {
			print "<p>ERROR</p>";
		}
	}

	mysqli_close($conexion);

	?>

</body>

</html>