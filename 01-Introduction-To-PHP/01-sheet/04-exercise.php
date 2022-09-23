<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<?php
	function aleatorio()
	{
		$value = rand(1, 5);

		switch ($value) {
			case 1:
				return "Uno";
				break;
			case 2:
				return "Dos";
				break;
			case 3:
				return "Tres";
				break;
			case 4:
				return "Cuatro";
				break;
			case 5:
				return "Cinco";
				break;
		}
	}
	?>
</head>

<body>
	<?php
	echo aleatorio();
	?>

</body>

</html>