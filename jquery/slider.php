<!DOCTYPE html>
<html>
<head>
	<title>Slider</title>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="jquery.bxslider.css" rel="stylesheet" />

</head>
<body>

<h1>Heading <small>small </small></h1>

	<code>
	$x=10+a;
	$a=$b+$c;
	</code>



<div style="width:300px;height:200px">

<ul id="slider">
  <li><img src="./images/1.jpg" title="Desert " /></li>
  <li><img src="./images/2.jpg" title="Flowers" /></li>
  <li><img src="./images/3.jpg" title="Jellyfish" /></li>
  <li><img src="./images/4.jpg" title="Panda" /></li>
</ul>
</div>

</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
	  $('#slider').bxSlider({
	  	mode:'vertical',
	  	captions:true,
	  	speed:1000
	  });
	});
</script>

