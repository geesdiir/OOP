<?php

class car{
	public $wheel_count = 4;

	function __construct(){
		echo $this->wheel_count;
	}
}
$bmw = new car();

?>