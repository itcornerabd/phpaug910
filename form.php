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

<form id="form1" name="form1" action="action.php" method="POST">

<table align="center">
	<tr>
		<td>Name </td>
		<td>
			<input type="text" name="txtname" id="txtname" size="25" placeholder="enter your name here" value="" required >
		</td>
	</tr>
	<tr>
		<td>Password</td>
		<td>
			<input type="email" name="txtpassword" placeholder="Password" required  >
			<!-- date ,email number color -->
		</td>
	</tr>
	<tr>
		<td>Address</td>
		<td>
			<textarea rows="5" cols="30" placeholder="Enter Address" required></textarea>
		</td>
	</tr>
	<tr>
		<td>City</td>	
		<td>
			<select name="selcity" id="selcity" required="">
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
			<input type="radio" name="radgender" value="MALE" id="radgnder1" required > MALE	
			<input type="radio" name="radgender" value="FEMALE" id="radgnder2" required> FEMALE

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