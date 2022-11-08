<?php
class Exercise02
{



	public function mostrarH1($text, $align)
	{
		switch ($align) {
			case 'left':
				print"<h1 style=\"text-align:left\">$text</h1>";
				break;
			case 'right':
				print"<h1 style=\"text-align:right\">$text</h1>";
				break;
			case 'center':
				print"<h1 style=\"text-align:center\">$text</h1>";
				break;
		}

	}

}
?>

