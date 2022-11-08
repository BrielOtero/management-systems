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
	$exer = new Exercise04(3,3);
	$exer->load(0,0,0);
	$exer->load(0,1,1);
	$exer->load(0,2,2);
	$exer->load(1,0,3);
	$exer->load(1,1,4);
	$exer->load(1,2,5);
	$exer->load(2,0,6);
	$exer->load(2,1,7);
	$exer->load(2,2,8);
	$exer->show();
	?>
	
</body>
</html>