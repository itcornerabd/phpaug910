<?php require('constr.php'); 

	if(isset($_POST['name']))
	{
		// var_dump($_POST);
		// die("");

		$name = $_POST['name'];
		$category =$_POST['category'];
		$cast =$_POST['cast'];
		$releasedate=$_POST['releasedate'];
		$plot=$_POST['plot'];
		$id=$_POST['id'];

		$query = "update  movie set name ='$name' , cast ='$cast' , plot='$plot', categoryid=$category, Releasedate='$releasedate' where id=$id  ";

		 
		$result = mysqli_query($con,$query);


		if(!$result)
		{
			die("error in update");
		}	
		else
		{
			header("location:table.php");
		}


	}








if(isset($_GET['id']))
	{
		$id= $_GET['id'];

		$query = "select * from movie where id=$id";

		$rows = mysqli_query($con,$query);
		if(!$rows)
			die("error in fetching data");

		if($rs=mysqli_fetch_array($rows))
		{
			$name= $rs['name'];
			$cast =$rs['cast'];
			$plot = $rs['plot'];
			$releasedate=$rs['Releasedate'];
			$category =$rs['categoryid'];

		}	
		else
		{
			die("404 movie not found");
		}				
	}	
	else
	{
		die("404 invalid request");
	}



?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<form method="POST">
		<table>
			<tr>
				<td>Name</td>
				<td>
					<input type="text" name="name" value="<?=$name?>" required>
				</td>
			</tr>
			<tr>
				<td>Category</td>
				<td>
					<select name="category">
						<option value="">--select category</option>	
					<?php 
						$query = "select * from category order by name ";

						$rows= mysqli_query($con,$query);
						if(!$rows)
							die("error in fetching");

						while($rs=mysqli_fetch_array($rows)):
							
							$selected="";	
							if($category==$rs['id'])
							$selected="selected";


					 ?>	
			<option value="<?=$rs['id']?>"  <?=$selected?> >
				 <?=$rs['name'] ?>
			</option>
					<?php endwhile ?>
					
					</select>
				</td>
			</tr>
			<tr>
				<td>Cast</td>
				<td><input type="text" name="cast" value="<?=$cast?>" required></td>
			</tr>
			<tr>
				<td>Release Date</td>
				<td><input type="date" name="releasedate" value="<?=$releasedate ?>" required></td>
			</tr>
			<tr>
				<td>Plot</td>
				<td><textarea name="plot" required><?=$plot?></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="hidden" name="id" value="<?=$id?>">
					<input type="submit" name="" value="SAVE">
				</td>
			</tr>
		</table>

	</form>

</body>
</html>
<?php require('closestr.php'); ?>