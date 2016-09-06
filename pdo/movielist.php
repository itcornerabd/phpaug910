<?php 
require 'connection.php';
require 'movie.php';

	
		 
	$movies = movie::fetchall( new connection());
	
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Movie List</title>
 	<link rel="stylesheet" type="text/css" href="../db/style.css">
 </head>
 <body>
 
<table>
 		<tr>
 			<th>id</th>
 			<th>Name</th>
 			<th>Cast</th>
 			<th>Plot</th>
 			<th>Category</th>
 			<th>Releasedate</th>
 		</tr>
 		<?php  foreach ($movies as $movie)  :?>

 		<tr>
 			<td><?=$movie->id?></td>
 			<td><?=$movie->name?></td>
 			<td><?=$movie->cast?></td>
 			<td><?=htmlentities( $movie->plot)?></td>
 			<td><?=$movie->categoryid?></td>
 			<td><?=$movie->Releasedate?></td>
 		</tr>
 	<?php endforeach ?>

 	</table>

 </body>
 </html>