<?php 

date_default_timezone_set("Asia/Kolkata");

echo date('Y-m-d H:i:s A');


echo "<hr/>";


	$fruits = [  10=>'strawberry',  23=>'Mango' , 2=>'Apple'  , 12=> 'Orange', 3 =>'Pinapple' ];

	$size = count($fruits);

	echo $size;
	// var_dump($fruits);
	// print_r($fruits);

	var_dump( in_array("Apple", $fruits));
	var_dump( array_search("Apple",$fruits));

	$is_exist = array_search("Apple",$fruits);
	if($is_exist >-1)
	{
		echo "apple is there";	
	}
	else
	{
		echo "no apple";
	}

	var_dump($fruits);
	//sort($fruits);
	// sort array , index re arrange strts from 0

	//asort($fruits);
		// sort array , index will not arrange 

	//ksort($fruits);
	//sort according to key/index

	//rsort($fruits);
	// reverse sort array , index re arrange strts from 0

	arsort($fruits);
	// reverse sort array , index will not re arrange strts from 0

	var_dump($fruits);



	$str = implode(",", $fruits);
	// array to string 
	echo $str;

	$newarray = explode(",", $str);
	// string to array 
	var_dump($newarray);


	$name = " Ram Ganesh Gadkari";
	$namearray = explode(" ", $name);

	var_dump($namearray);
	echo $namearray[0];

	if(isset($namearray[2]))
		echo $namearray[2]; 




 ?>