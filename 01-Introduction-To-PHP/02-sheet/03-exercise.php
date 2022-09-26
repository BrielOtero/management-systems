<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php

	function checkPass($pass)
	{
		if (strlen($pass) >= 8 && strlen($pass) <= 12) {
			if ($pass[0] == 0) {
				return true;
			}
		}
		return false;
	}

	?>
</head>

<body>
	<?php
	echo checkPass("0aaaaaaa");
	echo checkPass("0aaaaaaaaaaa");
	echo checkPass("0aaaaaa");
	echo checkPass("aaaaaaaa");
	?>
</body>

</html>