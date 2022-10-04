<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php


	if (isset($_POST["nombre"]) && !empty($_POST["nombre"])) {
		$nombre = $_POST["nombre"];
	} else {
		$correct = false;
	}

	if (isset($_POST["apellido1"]) && !empty($_POST["apellido1"])) {
		$apellido1 = $_POST["apellido1"];
	} else {
		$correct = false;
	}

	if (isset($_POST["apellido2"]) && !empty($_POST["apellido2"])) {
		$apellido2 = $_POST["apellido2"];
	} else {
		$correct = false;
	}

	if (isset($_POST["email"]) && !empty($_POST["email"])) {
		$email = $_POST["email"];
	} else {
		$correct = false;
	}

	if (isset($_POST["info"]) && !empty($_POST["info"])) {
		$info = $_POST["info"];
	} else {
		$correct = false;
	}

	if (isset($_POST["publi"]) && !empty($_POST["publi"])) {
		$publi = $_POST["publi"];
	} else {
		$correct = false;
	}


	if (isset($_POST["sub"]) && !empty($_POST["sub"])) {
		$sub = $_POST["sub"];
	} else {
		$correct = false;
	}

	if ($correct) {
		echo "hola";
	}

	?>

</body>

</html>