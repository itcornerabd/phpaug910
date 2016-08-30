<?php require 'constr.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<a href="addmovie.php">add new</a>

	<table align="center">
		<tr>
			<th>ID</th>
			<th>name</th>
			<th>Category</th>
			<th>Cast</th>
			<th>Release Date</th>
			<th>Details</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php 
			$query = "select m.id , m.name , m.cast, m.Releasedate , c.name  as categoryname, m.active from movie as m , category as c where c.id=m.categoryid   ";
			//and m.active=TRUE
			$rows = mysqli_query($con,$query);
			if(!$rows)
				die("error in fetching data".mysqli_error($con) );

			while($rs=mysqli_fetch_array($rows)):

				$cls ='';
				if($rs['active']=='0')
					$cls='delete';
		 ?>
		<tr class="<?=$cls?>" >
			<td><?=$rs['id'] ?> </td>
			<td><?=$rs['name'] ?></td>
			<td><?=$rs['categoryname'] ?></td>
			<td><?=$rs['cast'] ?></td>
			<td><?=$rs['Releasedate'] ?></td>
			<td>
				<a href="Detail.php?id=<?=$rs['id'] ?>">Details</a>
			</td>

			<td>
				<a href="edit.php?id=<?=$rs['id'] ?>">Edit</a>
			</td>
			<td>
				<?php if($rs['active']=="1"):  ?>
				<a href="delete.php?id=<?=$rs['id'] ?>&action=delete">Delete</a>
				<?php else: ?>
				<a href="delete.php?id=<?=$rs['id'] ?>&action=revert">Revert</a>
				<?php endif ?>
			</td>
		</tr>
	<?php endwhile ?>
	</table>

</body>
</html>
<?php require 'closestr.php' ?>