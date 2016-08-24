
	function foo()
	{
		setTimeout(function(){
			alert ('in anonymous function')

		}, 3000);
	}
	function fun1()
	{	
		alert ('in function')
	}

	var remainingSeconds =100;
	var t ;
	function timer()
	{
		t=setInterval(function(){
			remainingSeconds--;
		var hr, min ,sec;
			
			hr = parseInt(remainingSeconds/3600);	
			min = parseInt(remainingSeconds/60 - (hr*60)); // 5000 % 3600  = 1400 
			sec=  parseInt(remainingSeconds%60);
		
		var str = hr + ":" + min + " : " + sec;  	
		document.getElementById('timespan').innerHTML=str; 	
			if(remainingSeconds==0)
				clearInterval(t)
		} , 1000 )
	}

	function stoptimer()
	{
		clearInterval(t);
	}
