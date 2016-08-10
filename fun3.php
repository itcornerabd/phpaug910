<?php 


	$a=10;
	if($a>=10)
	{
		$b="20";
	}

	if(isset($b))
		echo $b;
	else
		{
		echo "b is not defined";
			//exit(1600); 1700 1800
			die("error");
		}

	echo "<br>";

	if(is_int($b))
		echo "b is integer";
	else
		echo "b is not integer";

	echo "<br>";

	if(is_numeric($b))
		echo "b is numeric";
	else
		echo "b is not numeric";
	//is_string is_float is_array 

 ?>