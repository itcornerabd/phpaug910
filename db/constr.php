<?php 
	session_start(); 
	
	$ulr=$_SERVER['REQUEST_URI'];

if(strpos($ulr, "login")===false)
{
	if(!isset($_SESSION['username']))
  {
  	header("location:login.php");
  }
}


 $con = mysqli_connect("localhost","root","","demo");

 if(!$con)
 {
 	die("error in conection please try again");
 }


 ?>