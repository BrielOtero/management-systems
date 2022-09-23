<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php

	function radio($radio){

		return Pi()*($radio *$radio);
	}

	?>
</head>
<body>
	<?php

	echo radio(2);
	?>
</body>
</html>