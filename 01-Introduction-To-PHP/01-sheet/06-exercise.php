<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<?php
	function prize($age)
	{

		switch ($age) {
			case $age < 8:

				return 0;
				break;
			case $age >= 8 && $age <= 16:

				return 5;
				break;
			case $age >= 17 && $age <= 25:

				return 8;
				break;
			case $age >= 26 && $age <= 55:

				return 10;
				break;
			case $age >= 56 && $age <= 65:

				return 5;
				break;
			case $age > 66:

				return 0;
				break;
		}
	}
	?>
</head>

<body>

	<?php
	echo prize(9);
	?>

</body>

</html>