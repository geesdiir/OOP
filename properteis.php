<?php
class Cars{
	var $wheels = 4;
	var $doors = 10;

	function arday(){
		echo "hello every one welcome to the php course";
	}
	// Using Return with inside of the Method
	function making_return(){
		Return 'these car has been beloogin more than ' . $this->wheels . ' wheels';
	}
}
$host_class = new Cars();
$host_class->arday();
echo "<br>";
 echo $host_class->wheels;
 echo "<br>";
 echo $host_class->doors;
 echo "<br>";
 $host_class->making_return();
 echo "<br>";
 echo $host_class->making_return();


?>