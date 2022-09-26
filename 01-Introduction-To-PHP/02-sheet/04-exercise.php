<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php
	function peers()
	{
		$cont = 0;
		$peer=array_fill(0,10,0);

		for ($i = 0; $i < count($peer); $i++) {
			$cont = $cont+2;
			$peer[$i] = $cont;
			echo $peer[$i];
		}
	}
	?>
</head>

<body>
	<?php
	peers();
	?>

</body>

</html>