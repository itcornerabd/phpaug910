<?php 
	$name = '';
	if(isset($_GET['name']))
		$name = $_GET['name'];

	$fruits = ['Mango'=>40  ,'Apple'=>60 , 'Orange'=>80];



 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Demo</title>
</head>
<body>

	<?php 
	if(!empty($name)) :
		
	?>
		<h1> <?= $name ?> </h1>
	<?php	
	endif 
	?>  
	
	<ul>
		<?php foreach($fruits as $fruitname): ?>
				<li> <?=$fruitname ?> </li>
		<?php endforeach ?>
	</ul>


	 <?php 
	 	echo "<ol>";

	 	foreach ($fruits as $fruitname) {
	 		
	 		echo " <li> $fruitname </li>  ";
	 	}

	 	echo "</ol>";
	  ?>

	  <ul>
	  	<?php foreach ($fruits as $fruitname => $price): ?>	
	  		<li>
	  		<?=$fruitname ?> has price of <?=$price?> /kg  
	  		</li>
	  	<?php endforeach ?>		
	  </ul>
</body>
</html>