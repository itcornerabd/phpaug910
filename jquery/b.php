<?php 
		 
	if(isset($_GET['letter']))
	{

		$letter = $_GET['letter'];
		//sql code 
		?>

		<ul>
			<li>Ball</li>
			<li>Bat</li>
			<li>Bits</li>
		</ul>

		<?php 

	}
	else
	{
		echo "Invalid request";
	}


 ?>