<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<?php

	function multiple($a, $b)
	{
		if (($a % $b) == 0) {
			return "Is multiple";
		} else {
			return "Not is multiple";
		}
	}

	?>
</head>

<body>
	<?php
	echo multiple(4, 2);
	?>

</body>

</html>