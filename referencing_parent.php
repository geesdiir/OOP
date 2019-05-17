<?php

class cars{
	static $wheel_count = 16;

	function car_details(){
		return self::$wheel_count;
	}
}

class trucks extends cars{

	static function display(){
		echo parent::car_details();
	}
}

 trucks::display();




?>