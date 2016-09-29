<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap-theme.min.css">	
	<style type="text/css">
		body
		{
			margin-top: 100px;
		}	
	</style>

	<title>Movies</title>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="btn-group-vertical" role="group" aria-label="..." id="categorylist">
				 
				</div>

			</div>
			<div class="col-md-8"></div>				
		</div>
	</div>

</body>
</html>
<script type="text/javascript" src="./js/jquery-3.1.0.min.js" ></script>
<script type="text/javascript" src="./js/bootstrap.min.js" ></script>

<script type="text/javascript">
	
$.getJSON('./api/category.php',function(returnjson){

	var html='';
		if(returnjson.status=="success")
		{
			
			$.each(returnjson.data,function(key,value){

				html+='<button type="button" class="btn btn-default category">'+value.name+'</button>'				 
			})
		//console.log(html);
			$("#categorylist").html(html);
			assignclick();
		}
		else
		{
			alert("some error occured");
		}

})

	//$("body").on('click','.category',function(){
	 
function assignclick()
{
	 $(".category").click(function(){
		console.log('in click event')
	})
}

</script>

