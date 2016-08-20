<!DOCTYPE html>
<html>
<head>
	<title>Javascript Demo</title>

</head>
<body>

<input type="text" id="txt1" onkeyup="foo()" value="0" >

<input type="text" id="txt2" onkeyup="foo()" value="0" >

<input type="button" value="clickme" onclick="foo()" >
<span id="span1"></span>

<input type="text" id="sum">



</body>
</html>
<script type="text/javascript">

var a=10; 
var b=20;


function foo()
{
	var txt1 = document.getElementById('txt1').value;
	//console.log(txt1);
	var txt2 = document.getElementById('txt2').value;

	var total = parseInt( txt1) + parseInt(txt2);

	document.getElementById('sum').value= total;

	document.getElementById('span1').innerHTML= '<h1>'+total+'</h1>'
}


// console.log(a); // debugging 
// alert(a);//user msg 

// var c=a+b;	

// document.write(c); // rare  
</script>