<?php 


$age = 17;
	if($age>=18) // < <= > >= == !=
	{
		echo "eligible for vote";	
	}
	else
	{
		echo "not eligible for vote";
	}

$is_eligible = $age>=18?"eligible":"not eleigible";

echo $is_eligible;	



 ?>