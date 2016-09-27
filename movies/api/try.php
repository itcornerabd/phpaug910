<?php 

try {

	 $con = mysqli_connect("localhost","root","","demo");
		$a=10;
		$b=10;

		$c=$a/$b;
		echo $c;
			
	} 
catch (Exception $e)
 {
		echo "asd";
}

 ?>	