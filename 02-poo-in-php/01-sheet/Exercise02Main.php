<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php include 'Exercise02.php';?>
</head>
<body>
	<?php
	$exer = new Exercise02();
	$exer->mostrarH1("Hola","left");
	$exer->mostrarH1("Hola","right");
	$exer->mostrarH1("Hola","center");
	?>
	
</body>
</html>