<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<?php
	function prize($animal)
	{

		switch ($animal) {
			case "hurones":

				return 1;
				break;
			case "perros":

				return 1.5;
				break;
			case "gatos":

				return 1;
				break;
			case "loros":

				return 2;
				break;

			default:
				return "mascota no permitida";
		}
	}
	?>
</head>

<?php
echo prize("hurones");
?>

<body>

</body>

</html>