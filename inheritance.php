
<?php

// Inheritance------------

class cars{
	var $wheels = 4;
	var $doors = 5;
	function making(){
		echo "he can move so fast by using his wheels";
	}

	function making_retunr(){
		return 'animal and cars both of them has ' . $this->wheels . '  legs or wheels to worked it';
	}

}

$car_beh = new cars();

class animal extends cars {
	function gaagaale(){
		echo "He is a good student and he likes a programming ";
	}

}

$animal_beh = new animal();
echo $animal_beh->wheels;
echo "<br>";
echo $animal_beh->making_retunr();
echo "<br>";


?>