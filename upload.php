<?php 
var_dump($_FILES);

if(isset($_FILES['file1']))
{
	$tmp_name = $_FILES['file1']['tmp_name'];
	$filename = $_FILES['file1']['name'];
	$uploaddir= "upload/"; 
	$savepath = $uploaddir.$filename;

	// a.jpg => a1.jpg
	$pathinfo = pathinfo($savepath);
	//var_dump($pathinfo);

	$i=0;

	while(file_exists($savepath))
	{
		$i++;
		$newfilename = $pathinfo['filename'].$i.".".$pathinfo['extension'];
		$savepath = $uploaddir.$newfilename;	
	}
		  
		move_uploaded_file($tmp_name, $savepath );
		echo "file uploaded";
	 

	
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
</head>
<body>

<form action="" method="POST" enctype="multipart/form-data" >
	
<input type="file" name="file1">		
<br>
<br>
<input type="submit" name="" value="upload">
</form>

</body>
</html>