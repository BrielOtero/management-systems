<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<?php
	function win($age)
	{
		if ($age >= 75 && $age <= 80) {
			return $age * 0.05;
		} else {
			return 0;
		}
	}
	?>
</head>

<body>
	<?php
	echo win(76);
	?>

</body>

</html>