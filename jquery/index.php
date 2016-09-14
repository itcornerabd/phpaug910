<!DOCTYPE html>
<html>
<head>
	<title>Jquery Demo</title>


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



<!-- 

<div> div1</div>
<div class="cls"> div2</div>
<div> div3</div>

<p>p 1</p>
<p class="cls">p2 </p>


<span>span1</span>
<span class="cls">span2</span>
<span>span3</span>	

<input type="button" id="btn1" value="btn">	
 -->

</body>
</html>


<script type="text/javascript" src="./js/jquery-3.1.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	//$("#btn1").click(function(){ alert('from jquery')})

	// $("p").addClass('yellow');

	// $(".cls").addClass('yellow');

	// $("#btn1").addClass('yellow');


	//$("table").addClass('yellow');

	//$("tr").addClass('yellow');

	//$("td").addClass('yellow');

	//$("td:contains(Comedy)").addClass('yellow');

	//$("td:contains(Comedy)").next().addClass('yellow');

	//$("td:contains(Comedy)").parent().addClass('yellow');

	//$("tr:contains(Comedy)").addClass('yellow');


	// $("tr:odd").addClass('yellow');
	// $("tr:even").addClass('red');

	// starts from 0 irrespective of parent 

	// $("tr:nth-child(odd)").addClass('yellow');

	// $("tr:nth-child(even)").addClass('red');


	$("tr:eq(9)").addClass('yellow');

	//starts from 1 resptecive to parent
	// $(".cls:eq(12)") DOM   
})
</script>