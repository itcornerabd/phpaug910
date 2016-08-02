<?php 
	$fruits = [ ["Apple","mango", "orange"] , ["pinapple","strawberry"] ];

	var_dump($fruits); 


	for($i=0;$i<count($fruits);$i++)
	{
		  for($j=0;$j<count($fruits[$i]);$j++)
		  {
		  	echo $fruits[$i][$j]."<br>";
		  }

	}

	$fruits = [ 3=>[6=>"Apple",9=>"mango", 2=>"orange"] , [2=>"pinapple","strawberry"] ];

	var_dump($fruits); 

	foreach($fruits as $fruitarray)
	{
		foreach($fruitarray as $fruitname)
			echo $fruitname . "<br>";
	}
	
	//   arra[ 3=>4 , 7=>15  ]

	// 3*4 + 7*15 = 117  



 ?>