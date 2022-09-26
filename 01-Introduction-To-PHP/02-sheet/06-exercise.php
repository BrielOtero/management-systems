<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php
	function changeArray(){
		$colores = array('rojo', 'verde', 'amarillo', 'azul','rosa');
		for ($i=0; $i < count($colores) ; $i++) { 
			if($colores[$i]=="azul"){
				echo $i;
				unset($colores[$i]);
			}
		}

		for ($j=0; $j < count($colores); $j++) { 
			$show= $colores[$j];
			echo $show;
		}

	}
	?>
</head>
<body>

<?php
changeArray();
	?>
	
</body>
</html>