<?php 
require 'constr.php';
	
	if(isset($_GET['imgname']))
	{
		$imgname =$_GET['imgname'];

		if(file_exists("./img/".$imgname))
		{
			header("content-type:image/jpg");
			readfile("./img/".$imgname);
		}

	}

 ?>