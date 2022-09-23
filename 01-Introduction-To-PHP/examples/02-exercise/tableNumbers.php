
	<?php

	function create($number){
		for ($cont = 1; $cont <= $number; $cont++) {
			printf("<br><tr><td>%-4d</td><td>%-4d</td><td>%-4d</td></tr>", $cont, $cont * $cont, $cont * $cont * $cont);
		}
	}
	?>
