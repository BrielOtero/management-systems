<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php

	function table()
	{

		for ($j = 0; $j <= 10; $j++) {
			printf("<tr>");
			for ($i = 0; $i <= 10; $i++) {


				if ($i == 0) {
					printf("<td style=\" border: 1px solid black;\">%-3d</td>", ($j));

				} else if ($j == 0) {
					printf("<td style=\" border: 1px solid black;\">%-3d</td>", ($i));

				} else {
					printf("<td style=\" border: 1px solid black;\">%-3d</td>", ($i * $j));
				}
			}

			printf("</tr>");
		}
	}

	?>
</head>

<body>
	<table style=" border: 1px solid black;">
		<?php
		table();
		?>
	</table>

</body>

</html>