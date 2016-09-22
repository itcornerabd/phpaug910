<!DOCTYPE html>
<html>
<head>
	<title>AJax</title>

<style type="text/css">
	
.yellow
{
	background-color: yellow;
}

.red
{
	background-color: red;
}


table ,tr,td
{
	border:1px solid black;
	border-collapse: collapse;
}

</style>


</head>
<body>

<table width="500px" align="center">
	<tr>
		<td width="150px">
			<ul>
				<li>
					<a href="demo.php" id="linka" >A</a>
				</li>
				<li>
					<a href="#" id="linkb">B</a>
				</li>
				<li>C</li>
				<li>D</li>
			</ul>
		</td>
		<td>

			<div id="words">
				
			</div>
		</td>
	</tr>
</table>

</body>
</html>

<script type="text/javascript" src="./js/jquery-3.1.0.min.js"></script>

<script type="text/javascript">
	
$("#linka").click(function(event){
	event.preventDefault();
 	$("#words").load('a.php');
})

$("#linkb").click(function(){

	var gerparam = { 'letter':'B' , 'ID':1 };

	$.get('b.php',gerparam,function(response){
		 console.log(response);
		 $("#words").html(response);
		 
	})
})

</script>