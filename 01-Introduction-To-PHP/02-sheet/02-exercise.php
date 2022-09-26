<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php
	function change($sentence, $letter)
	{
		$cont = 0;

		for ($i = 0; $i < strlen($sentence); $i++) {
			if ($sentence[$i] == $letter) {
				$cont++;
			}
		}
		
		return $cont;
	}
	?>
</head>

<body>

<?php
echo change("abbbabbbbabbbabbbba","a");
	?>

</body>

</html>