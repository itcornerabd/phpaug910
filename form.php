<!DOCTYPE html>
<html>
<head>
	<title>Form Demo</title>

	<style type="text/css">
		table,tr,td
		{
			border: 1px solid black;
			border-collapse: collapse;
		}		
		table
		{
			width: 500px;
		}

	</style>
</head>
<body>

<a href="action.php?id=1&name=abc">click here</a>


<form id="form1" name="form1" action="action.php" method="POST">

<table align="center">
	<tr>
		<td>Name </td>
		<td>
			<input type="text" name="txtname" id="txtname" size="25" placeholder="enter your name here" value=""  >
		</td>
	</tr>
	<tr>
		<td>Password</td>
		<td>
			<input type="password" name="txtpassword" placeholder="Password"   >
			<!-- date ,email number color -->
		</td>
	</tr>
	<tr>
		<td>Address</td>
		<td>
			<textarea rows="5" cols="30" placeholder="Enter Address" name="txtaddress" ></textarea>
		</td>
	</tr>
	<tr>
		<td>City</td>	
		<td>
			<select name="selcity" id="selcity" ="">
				<option value="" >--select City--</option>
				<option value="1" >Abad</option>
				<option value="2" >Pune</option>
				<option value="3">Mumbai</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Gender</td>
		<td>
			<input type="radio" name="radgender" value="MALE" id="radgnder1"  > MALE	
			<input type="radio" name="radgender" value="FEMALE" id="radgnder2" > FEMALE

		</td>	
	</tr>
	<tr>
		<td>Hobby</td>
		<td>
			<input type="checkbox" name="chkhobby1" value="SING" > Singing
			<input type="checkbox" name="chkhobby2" value="DANCE"> Dancing
			<input type="checkbox" name="chkhobby3" value="SPORT"> Sports
		</td>
	</tr>
	<tr>
		<td>Hobby</td>
		<td>
			<input type="checkbox" name="chk[12]" value="SING" > Singing
			<input type="checkbox" name="chk[3]" value="DANCE"> Dancing
			<input type="checkbox" name="chk[19]" value="SPORT"> Sports
			<input type="checkbox" name="chk[]" value="PAINT"> Painting
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<input type="button" name="" value="button">
			<input type="submit" name="" value="SUBMIT ">
			<input type="reset" name="" value="RESET">
		</td>
	</tr>
</table>
</form>
 


</body>
</html>