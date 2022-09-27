<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php
	function animals()
	{

		$animals[0] = array("Perro", "Leon", "Cocodrilo");
		$animals[1] = array("Gato", "Pantera", "Caiman");

		echo ($animals[1][1]);
	}
	?>
</head>

<body>

	<?php
	animals();
	?>



</body>

</html>