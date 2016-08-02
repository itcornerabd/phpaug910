<?php 

	$a=10;

	foo($a);

	echo "<br>".$a;

	function foo(&$x)
	{

		$x=20;
		echo $x;

	}




 ?>