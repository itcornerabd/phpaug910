<?php 
	require 'connection.php';	

	$con = new connection();

	$name = 'demo movie';
	$cast ='asd';
	$plot='asdasdasd';
	$categoryid=1;
	$Releasedate='2016-09-09';

	$statement= $con->pdo->prepare("insert into movie (name,cast,plot,categoryid,Releasedate) values (?,?,?,?,?)");

	$result = $statement->execute($name,$cast,$plot,$categoryid,$Releasedate);


	// $statement= $con->pdo->prepare("insert into movie (name,cast,plot,categoryid,Releasedate) values (:name,:cast,:plot,:categoryid,:Releasedate)");


	// $result= $statement->execute([':name'=>$name , ':cast'=>$cast , ':plot'=>$plot, ':categoryid'=>$categoryid , ':Releasedate'=>$Releasedate ]);
	
	var_dump($result);


	// "update movie set name=? , cast=? , plot=? , categoryid=? , Releasedate=? where id=?";

	// "delete from movie where id= ? ";














 ?>