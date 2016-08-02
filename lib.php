<?php 
	
	$a=5;

	if($a>=10)
	{
		$b="asd";
	}

	if(isset($b))//to test given varible is defined or not
		echo $b;
	else
		{
			echo "b is not defined";
			//exit(1600);
			die("some error occured");
		}

	if(is_int($b))
		echo "<br>b is integer";
	else
		echo "<br> b is not integer";

	echo "<br>";
	if(is_numeric($b))
		echo "b is numeric";
	else
		echo "b is not numeric";
// is_float is_string is_array


 ?>