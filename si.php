<?php
	include_once 'inc.php';

	include_once 'inc.php';

	//require_once 'inc1.php';

	echo "simple_interest calculation ";

	$p=1000;
	$r=2;
	$t=2;



echo simple_interest($p,$r,$t);
echo "<br>". simple_interest(1000);
echo "<br>". simple_interest(2000);
echo "<br>". simple_interest(4000,3,2);
echo "<br>". simple_interest(2000,2,3);

 ?>