<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php
	function factorial($number){
		$result=1;

		for ($i=$number; $i > 0; $i--) { 
		$result	=$i*$result;
		}
		return $result;
	}
	?>
</head>
<body>

<?php
		echo factorial(4);
	?>
	
</body>
</html>