<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<?php
	function showTable()
	{

		$nombres = array("Carlos Álvarez", "Laura López", "Rosa Márquez", "Jorge Tiras");
		$materias = array("Lengua", "Historia", "Inglés", "Matemáticas");

		echo "<tr>";


		printf("<td style=\" border: 1px solid black;\">%-10s</td>", "");
		for ($i = 0; $i < count($materias); $i++) {
			printf("<td style=\" border: 1px solid black;\">%-10s</td>", $materias[$i]);
		}
		echo "</tr>";

		for ($j = 0; $j < count($nombres); $j++) {
			echo "<tr>";
			printf("<td style=\" border: 1px solid black;\">%-10s</td>", $nombres[$j]);
			printf("<td style=\" border: 1px solid black;\">%-10d</td>", rand(1, 100));
			printf("<td style=\" border: 1px solid black;\">%-10d</td>", rand(1, 100));
			printf("<td style=\" border: 1px solid black;\">%-10d</td>", rand(1, 100));
			printf("<td style=\" border: 1px solid black;\">%-10d</td>", rand(1, 100));
			echo "</tr>";
		}
	}
	?>
</head>

<body>
	<table style=" border: 1px solid black;">
		<?php
		showTable();
		?>
	</table>

</body>

</html>