<!DOCTYPE html>
<html>
<head>
	<title>Jquery Demo</title>


<style type="text/css">
	
.yellow
{
	background-color: yellow;
}
.blue
{
	background-color: blue;
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


<table align="center">
		<tr >
			<td>1 </td>
			<td>Rustom</td>
			<td>ACTION</td>
			<td>udpate case</td>
			<td>2016-08-17</td>
		</tr>
		<tr >
			<td>2 </td>
			<td>Housefull3</td>
			<td>Comedy</td>
			<td>asd asd</td>
			<td>2016-08-01</td>
		</tr>
		<tr class="delete" >
			<td>3 </td>
			<td>Happy Bhag </td>
			<td>Comedy</td>
			<td>Abhay Deol</td>
			<td>2016-08-19</td>
		</tr>
		<tr >
			<td>4 </td>
			<td>updated movie</td>
			<td>Comedy</td>
			<td>21312</td>
			<td>2016-08-10</td>
		</tr>
			<tr >
			<td>5 </td>
			<td>asd</td>
			<td>ACTION</td>
			<td>123</td>
			<td>2016-08-30</td>
	</tr>

</table>

<hr>
<input type="button" class="btn" value="yellow" id="btnyellow" >
<input type="button" class="btn" value="red" id="btnred" >
<input type="button" class="btn" value="blue" id="btnblue" >

</body>
</html>


<script type="text/javascript" src="./js/jquery-3.1.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

		$(".btn").click(function(){
			var cls = $(this).val(); 
			$("table").removeClass();
			$("table").addClass(cls);
		})
		
		// $("#btnyellow").click(function(){
		// 	$("table").removeClass('red');
		// 	$("table").addClass('yellow');
		// })

		// $("#btnred").click(function(){
		// 	$("table").removeClass();
		// 	$("table").addClass('red');
		// })




		$("tr").hover(function(){
			$(this).addClass('yellow');	
		})

		$("tr").mouseout(function(){
			$(this).removeClass('yellow');
		})

})
//click hover mouseover keyup keypress keydown change blur submit  
</script>
