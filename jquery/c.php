<?php 
		 
	if(isset($_POST['letter']))
	{

		$letter = $_POST['letter'];
		//sql code 
		?>

		<ul>
			<li>Cat</li>
			<li>Camal</li>
			<li>Catch</li>
		</ul>

		<?php 

	}
	else
	{
		echo "Invalid request";
	}


 ?>