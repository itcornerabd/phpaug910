<!DOCTYPE html>
<html>
<head>
	<title>Action Page</title>
</head>
<body>

<?php 

	var_dump($_GET);

	if(isset($_GET['name']))
		echo $_GET['name'];

	if(isset($_GET['id']))
		echo $_GET['id'];

	var_dump($_POST);

	echo "<hr>";

	if(isset($_POST['txtname']))
		echo "name is ". $_POST['txtname'];

	if(isset($_POST['txtpassword']))
		echo "<br> password is ". $_POST['txtpassword']; 

	if(isset($_POST['txtaddress']))
		echo "<br> address is ".$_POST['txtaddress'];

	if(isset($_POST['selcity']))
		echo "<br> selected city is ".$_POST['selcity'];

 	if(isset($_POST['radgender']))
 		echo "<br> selected gender is ".$_POST['radgender'];

 	if(isset( $_POST['chkhobby1']))
 		echo "<br> selected hobby is ".$_POST['chkhobby1'];

 	if(isset( $_POST['chkhobby2']))
		echo "<br> selected hobby is ".$_POST['chkhobby2'];

 	if(isset( $_POST['chkhobby3']))
		echo "<br> selected hobby is ".$_POST['chkhobby3'];


	if(isset($_POST['chk']))
	{
		$chk = $_POST['chk'];

		foreach($chk as $hobby)
		{
			echo "<br> selected hobby is $hobby";
		}
	}


 ?>



</body>
</html>