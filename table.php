<?php 
	$fruits = [
				[ 'id'=>1 , 'name'=>'mango','rate'=>'40','location'=>'Ratnagiri'  ],
				['id'=>5,'name'=>'Apple', 'rate'=>'60','location'=>'Kashmir'],
				['id'=>6, 'name'=>'Orange','rate'=>'80','location'=>'Nagpur']
			  ];

	// $user = [ [
	// 			'username'=>'abc' , 'date'=>'19/08', 'passwordtoken', 'update', 'facebookid'=>'ads' 	
	// 			] ]		  

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
	<style type="text/css">
		table,tr,td,th
		{
			border: 1px solid black;
			border-collapse: collapse;
		}	
		table
		{
			width:500px;
		}
		.red
		{
			background-color: yellow;
		}

	</style>
</head>
<body>

<table align="center">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Rate</th>
		<th>Location</th>
	</tr>
<?php  foreach ($fruits as $fruit):

$cls = "";
	if($fruit['rate']>50)
		$cls='red';
 ?>

 <?php //if($fruit['rate']>50) {echo 'red';}  ?>

	<tr class="<?=$cls?>" >
		<!-- <?php foreach ($fruit as $property): ?>
		 <td>	<?=$property?>	</td>
		<?php endforeach ?>	 -->

		<td><?=$fruit['id'] ?></td>
		<td><?=$fruit['name'] ?></td>
		<td><?=$fruit['rate'] ?></td>
		<td><?=$fruit['location'] ?></td>

	</tr>
<?php endforeach ?>
</table>



</body>
</html>