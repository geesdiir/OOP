
<?php
 class programmer{
 	protected $php =10;
 	private $node = 30;
 	public $react = 3;
 	function accessing(){
 		echo $this->php;
 		echo "<br>";
 		echo $this->node;
 		echo "<br>";
 		echo $this->react;
 		
 	}
 }

 $most_programm = new programmer();
 $most_programm->accessing();
 echo "<br>";
 echo $most_programm->react;

?>