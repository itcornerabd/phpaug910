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
			<div class="col-md-8" id="movielist">


			</div>				
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

			html+='<button type="button" class="btn btn-default category" data-id="'+value.id+'" >'+value.name+'</button>'				 
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
			
	 	var dataid = $(this).attr('data-id');
		//console.log('in click event'+dataid)

		var param = {'categoryid':dataid};

		$("#movielist").html('<img src="./images/wait.gif" >');
		$.getJSON('./api/movie.php',param,function(returnjson){

			var html='';
				if(returnjson.status=="success")
				{
					
					$.each(returnjson.data,function(key,value){
							
						html+=	'<h1>'+value.name+'</h1>'
						html+=	'<p>'+value.cast+'</p>'
						// html+=	'<span>29-09-2016</span>'	
	
					})

					$("#movielist").html(html);
				}

		})


	})
}

</script>

