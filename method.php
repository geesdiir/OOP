
<!-- Simple Method -->
<?php

class Cars{
	function get_method(){

	}
	function gaagaale(){

	}
	function Mohamud(){

	}
}
$method_calling = get_class_methods('Cars');
foreach ($method_calling as  $simple) {

	echo $simple . "<br>";
	# code...
}

?>