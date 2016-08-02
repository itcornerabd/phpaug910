<?php 

	$no =49; // 25 16-4  49-7   

	$flag= true;
	for($i=2;$i<=sqrt($no);$i++)
	{
		if($no%$i==0)
			{
				//echo "<br> no is divisible by ".$i;
				$flag=false;
				break;
			}

	}
	if($flag)
	{
		echo "no is prime";
	}
	else
	{
		echo "no is not prime";
	}
 ?>	