<?php
class Exercise03
{

private $value;
private $align;

public function __construct($value,$align){
 $this->value=$value;
 $this->align=$align;

}

	public function mostrarH1()
	{
		switch ($this->align) {
			case 'left':
				print"<h1 style=\"text-align:left\">$this->value</h1>";
				break;

			case 'right':
				print"<h1 style=\"text-align:right\">$this->value</h1>";
				break;
			case 'center':
				print"<h1 style=\"text-align:center\">$this->value</h1>";
				break;
		}
	}

}
?>