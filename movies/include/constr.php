<?php 
	session_start(); 
	

 $con = mysqli_connect("localhost","root","","demo");

 if(!$con)
 {
 	die("error in conection please try again");
 }


 ?>