<?php 
	// include require 

	// include_once('inc.php'); //static 
	// include_once('inc.php');	

	require_once('inc.php'); // db connection 
	require_once('inc.php');

	echo " asd";
	// 29/07/2016 = 2016-07-29   
	
	$a=1000;

	echo "<br>". si($a);
	echo "<br>". si(1000);
	echo "<br>". si(1000,5,2);
	echo "<br>". si(1000,4,2);
	echo "<br>". si(1000,3,3);	
 ?>