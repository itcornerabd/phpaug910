<?php 

	for ($i=1; $i<=4 ; $i++) 
	{ 
		for ($j=4; $j>=1 ; $j--) 
		{ 
			if($j<=$i)
				echo "*";
			else
				echo " &nbsp;";	
		}
		echo "<br>";
	}

	//    *
	//   **
	//  ***
	// ****
 ?>


