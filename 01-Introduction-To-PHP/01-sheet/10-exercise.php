<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php
	function fibonacci(){
		$fin=10000;
		$suma=1;
		$oldNum=0;
		$changeNumber=0;

		while($suma<$fin){
			$changeNumber=$suma;
			$suma +=$oldNum;

			if($suma<$fin){
				echo $suma;
			}
			
			echo " ";
			$oldNum =$changeNumber;
		}
	}

	?>
</head>
<body>
<?php
fibonacci();
	?>
	
</body>
</html>