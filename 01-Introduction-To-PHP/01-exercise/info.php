<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php
	include 'funciones.php'
	?>
</head>

<body>

	<?php

	$suma = sumar(3, 4);
	$resta = restar(3, 4);
	$multiplicacion = multiplicar(3, 4);
	$division = dividir(3, 4);


	echo "La suma es: $suma <br>"; // Se puede concatenar así.
	echo "La resta es: " . $resta; // O así.
	echo "<br>";
	echo "La multiplicacion es: $multiplicacion<br>";
	echo "La division es: $division<br>";

	?>
</body>

</html>