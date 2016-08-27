<?php require 'constr.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<table align="center">
		<tr>
			<th>ID</th>
			<th>name</th>
			<th>Category</th>
			<th>Cast</th>
			<th>Release Date</th>
		</tr>
		<?php 
			$query = "select * from movie order by id ";
			$rows = mysqli_query($con,$query);
			if(!$rows)
				die("error in fetching data");

			while($rs=mysqli_fetch_array($rows)):
		 ?>
		<tr>
			<td><?=$rs['id'] ?> </td>
			<td><?=$rs['name'] ?></td>
			<td><?=$rs['categoryid'] ?></td>
			<td><?=$rs['cast'] ?></td>
			<td><?=$rs['Releasedate'] ?></td>
		</tr>
	<?php endwhile ?>
	</table>

</body>
</html>
<?php require 'closestr.php' ?>