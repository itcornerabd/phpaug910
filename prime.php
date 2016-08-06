<?php 

	$no =47; // 25 16-4  49     2 15  226  227
		// 2 3  5  7  16 2  47 2 7  46  2 6  7 
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