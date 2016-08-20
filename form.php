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
			<input type="password" name="txtpassword" id="txtpassword"
			  placeholder="Password"   >
			<!-- date ,email number color -->
		</td>
	</tr>
	<tr>
		<td>Address</td>
		<td>
			<textarea rows="5" cols="30" placeholder="Enter Address" name="txtaddress" id="txtaddress" ></textarea>
		</td>
	</tr>
	<tr>
		<td>City</td>	
		<td>
			<select name="selcity" id="selcity"  >
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
			<input type="checkbox" id="chk1"  name="chk[12]" value="SING" > Singing
			<input type="checkbox"  id="chk2" name="chk[3]" value="DANCE"> Dancing
			<input type="checkbox"  id="chk3" name="chk[19]" value="SPORT"> Sports
			<input type="checkbox"  id="chk4" name="chk[]" value="PAINT"> Painting
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<input type="button" name="" value="button">
			<input type="submit" name="" value="SUBMIT" onclick="return validate()" >
			<input type="reset" name="" value="RESET">
		</td>
	</tr>
</table>
</form>
 


</body>
</html>
<script type="text/javascript">
function validate()
{
	// a = ['txtaddress','txtname']
	// foreach(array as value)	
	// {
	// 	document.getElementById(value).value==""

	// }

	if(document.getElementById('txtname').value=="")
	{
		alert('Please enter your name');
		document.getElementById('txtname').focus();
		return false;
	}

	if(document.getElementById('txtpassword').value=="")
	{
		alert('Please enter your password');
		document.getElementById('txtpassword').focus();
		return false;
	}

	if(document.getElementById('txtaddress').value=="")
	{
		alert('Please enter your address');
		document.getElementById('txtaddress').focus();
		return false;
	}

	if(document.getElementById('selcity').value=="")
	{
		alert('Please select your city');
		document.getElementById('selcity').focus();
		return false;
	}

	var rad1 = document.getElementById('radgnder1').checked;
	var rad2 = document.getElementById('radgnder2').checked;

	if(!(rad1 || rad2))
	{
		alert ('please select gender');
		document.getElementById('radgnder1').focus();
		return false;
	}

	var chkflag = false;

	for(var i =1;i<=4;i++)
	{
		if(document.getElementById('chk'+i).checked)
		{
			chkflag=true;
			break;
		}
	}	
	if(!chkflag)
	{
		alert('please select atlease one hobby');
		document.getElementById('chk1').focus();
		return false;		
	}

	return true;
}
</script>

