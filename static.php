<?php

class animal{
	static $lion = " he can eat you ";
	public $goat  = "they have a good milk";
	function all_sysb(){
		echo "simple text";
		echo "<br>";
		return "Animal " .  $this->goat;
	}
	static function making_method(){
		echo "these method you can make as static method and calling it";

	}
}

echo animal::$lion;
echo "<br>";
$compere = new animal();
echo $compere->goat;
echo "<br>"; 
 echo $compere->all_sysb();
 echo "<br>";

 echo "making as method";
 echo "<br>";
 animal::making_method();


?>