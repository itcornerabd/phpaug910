<?php 
require 'constr.php';

//var_dump($_POST);

	if(isset($_POST['name']))
	{

		$name = $_POST['name'];
		$category =$_POST['category'];
		$cast =$_POST['cast'];
		$releasedate=$_POST['releasedate'];
		$plot=$_POST['plot'];

		$query = "insert into movie (name, cast, plot, categoryid, Releasedate) values ('$name','$cast','$plot',$category,'$releasedate' ) ";

		$result = mysqli_query($con,$query);

		if(!$result)
		{
			die("error in inerstion");
		}	
		else
		{
			header("location:table.php");
		}


	}


 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Movie Add</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<form method="POST">
		<table>
			<tr>
				<td>Name</td>
				<td>
					<input type="text" name="name" required>
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
					 ?>	
						<option value="<?=$rs['id']?>" > <?=$rs['name'] ?> </option>

					<?php endwhile ?>
					
					</select>
				</td>
			</tr>
			<tr>
				<td>Cast</td>
				<td><input type="text" name="cast" required></td>
			</tr>
			<tr>
				<td>Release Date</td>
				<td><input type="date" name="releasedate" required></td>
			</tr>
			<tr>
				<td>Plot</td>
				<td><textarea name="plot" required></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="" value="SAVE">
				</td>
			</tr>
		</table>

	</form>

</body>
</html>
<?php 
require 'closestr.php';
 ?>