<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php include 'Exercise01.php';?>
</head>
<body>
	<?php
	$person = new Exercise01();
	$person->cargarOpcion("https://www.colegiovivas.com/","Colegio vivas");
	$person->cargarOpcion("https://github.com/SrMazas/","Git");
	$person->mostrar();

	?>
	
</body>
</html>