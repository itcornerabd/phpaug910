<?php 
// 1. database connection 
// 2. prepare query 
// 3. fire/execute query 
// 4. check results // rows  // t/f
// 5. close connection  
	
	require 'constr.php';
 $query = "select * from movie";

  $rows = mysqli_query($con,$query);

  if(!$rows)
  {
  	die("error in fetching data");
  }

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<ul>
<?php while( $rs = mysqli_fetch_array($rows)):  ?>	
	
  <li> <?=$rs['name'] ?> </li>
	
<?php endwhile ?>	
</ul>

</body>
</html>
 
<?php 	require 'closestr.php'; 
 ?> 
