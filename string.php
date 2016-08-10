<?php 
	//$a=20;	
	$str = "Hello World";
	//echo $str;
	printf("string is %s",$str);
	$size = strlen($str);
	echo "<br> $size";
	echo  "<br>". strtoupper($str);
	echo "<br>".strpos($str, "World"); //case sensetive 
	echo "<br>".stripos($str, "o"); // case insensative
	echo "<br>".strrpos($str, "o");//case sensetive reverse
	echo "<br>".strripos($str, "L");//case insensetive reverse
	echo "<br>".strrev($str);
	echo"<br>".str_replace("World","PHP",$str);
	echo "<br>".str_ireplace("world","PHP",$str);
	echo "<br>".substr($str,6,2);	





	//  
	// 

	// 

	// $name = "Neha Gade";

	// $spacepos = strpos($name," ");
 //  	$strlen= strlen($name); 
	// //echo $spacepos;

	// echo "<br>".substr($name,0,$spacepos);
	// echo "<br>".substr($name,($spacepos+1),($strlen-$spacepos));		




 ?>