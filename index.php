<?php
		
	error_reporting(E_ERROR);

	// - no display E_ALL -ALl error , E_NOTICE - only notice 

	$a=10;

	echo $a;

	$str =  'he said \' \"  \\  "asd" ';
	echo  "<br>".$str;

	$b =20;

	$c = $a%$b; 

	echo "<br> addition is ".$c;

	$a+=10;//	$a=$a+1;  

	echo "<br>".a;

	$d=--$a;   // $a+=1;	

	$c= $a/0;
	echo "<br>".$a;
	echo "<br>".$d;

	define1("PI",3.14);
	echo "asd". PI;

	//NOTICE print & continue
	//PARSE  not execute
	//FATAL  stops complete exe	
	//Warning - may be execute fine in other case




?>