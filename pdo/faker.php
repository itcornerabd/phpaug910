 <?php 
	require 'movie.php';

	require './vendor/autoload.php';


	$faker = Faker\Factory::create();

	$movies = [];

	for ($i=1; $i<=20 ; $i++)
	{ 
		$movie = new movie($faker->name);
		$movie->cast = $faker->name;
		$movie->plot= $faker->sentence;
		$movie->categoryid = rand(1,2) ;
		$movie->Releasedate=date('Y-m-d');

		$movies[]=$movie;	
	}	


	//var_dump($movies);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Moviews</title>
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
 			<td><?=$movie->plot?></td>
 			<td><?=$movie->categoryid?></td>
 			<td><?=$movie->Releasedate?></td>
 		</tr>
 	<?php endforeach ?>

 	</table>

 </body>
 </html>

