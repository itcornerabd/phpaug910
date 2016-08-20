<!DOCTYPE html>
<html>
<head>
	<title>Timer</title>
</head>
<body>


	<input type="button" value="Start" name="" onclick="timer()">
	<input type="button" value="Stop" name="" onclick="stoptimer()" >

	<div>
	<span id="timespan">
		
	</span>
	</div>

</body>
</html>

<script type="text/javascript">
	
	
	
	function foo()
	{
		//alert('hello');
		// setTimeout("fun1()", 3000); 
		setTimeout(function(){
			alert ('in anonymous function')

		}, 3000);
	}
	function fun1()
	{	
		alert ('in function')
	}

	var i =100;
	var t ;
	function timer()
	{
		t=setInterval(function(){
			i--;
		var hr, min ,sec;
			
			hr = parseInt(i/3600);	
			min = parseInt(i/60 - (hr*60)); // 5000 % 3600  = 1400 
			sec=  parseInt(i%60);
		
		var str = hr + ":" + min + " : " + sec;  	
		document.getElementById('timespan').innerHTML=str; 	
			if(i==0)
				clearInterval(t)
		} , 1000 )
	}

	function stoptimer()
	{
		clearInterval(t);
	}
 // 5000 
 //  1hr = 60* 60 = 3600 sec 
 // hr 5000/3600 = 1
 //  5000%60 = 83 =  83- (1*60) = 23

//  8500
// hr  8500/3600 = 2. 
//  min 8500/60 = 141 = 141-(2*60)= 21
 // i/60-(hr*60)




</script>