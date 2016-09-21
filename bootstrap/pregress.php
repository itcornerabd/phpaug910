
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


	<title>Bootstrap Demo</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap-theme.min.css">	

<style type="">
	
	body
	{
		margin-top: 40px;	
	}		
</style>
</head>
<body>
<div class="container">

<button class="btn btn-success" id="start" >Start</button>
<button class="btn btn-danger" id="stop">Stop</button>		


<div class="progress">
  <div class="progress-bar" id="progress"  role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="200" style="width: 100%;">
    100%
  </div>
</div>


<div class="progress">
  <div class="progress-bar" id="progress2"  role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="200" style="width: 100%;">
    100%
  </div>
</div>


<div class="progress">
  <div class="progress-bar" id="progress3"  role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="200" style="width: 100%;">
    100%
  </div>
</div>


<span id="timespan"></span>

</div>
</body>
</html>
<script type="text/javascript" src="./js/jquery-3.1.0.min.js" ></script>
<script type="text/javascript" src="./js/bootstrap.min.js" ></script>

<script >
	var total =100;
	var remainingSeconds =total;
	var t ;


			
$("#start").click(function(){
		t=setInterval(function(){
			remainingSeconds--;
		var hr, min ,sec;
			
			hr = parseInt(remainingSeconds/3600);	
			min = parseInt(remainingSeconds/60 - (hr*60)); // 5000 % 3600  = 1400 
			sec=  parseInt(remainingSeconds%60);
		
		var str = hr + ":" + min + " : " + sec;  	
		$("#timespan").html(str);

		var perc =100-( parseInt(remainingSeconds/total*100));

		$("#progress").html(perc);	

		$("#progress").attr('style', 'width:'+perc+'%')
		$("#progress2").attr('style', 'width:'+Math.floor((Math.random() * 100) + 1)+'%')
		$("#progress3").attr('style', 'width:'+Math.floor((Math.random() * 100) + 1)+'%')

		//document.getElementById('timespan').innerHTML=str; 	
			if(remainingSeconds==0)
				clearInterval(t)
		} , 1000 )

})		

$("#stop").click(function(){
	clearInterval(t);
})

</script>
