<?php 

$a=10; //global 
foo();

echo "<br>".$a;

function foo()
{
	global $a; 
	$a=20; //local 
	echo $a;

}



 ?>

