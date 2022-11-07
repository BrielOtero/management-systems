<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php include 'Exercise04.php';?>
</head>
<body>
	<?php
	$exer = new Exercise04("Hola","left");
	$exer->mostrarH1();
	$exer = new Exercise04("Hola","right");
	$exer->mostrarH1();
	$exer = new Exercise04("Hola","center");
	$exer->mostrarH1();
	?>
	
</body>
</html>