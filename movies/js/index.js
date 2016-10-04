$.getJSON('./api/category.php',function(returnjson){

	var html='';
	var options = '';
		if(returnjson.status=="success")
		{
			
			$.each(returnjson.data,function(key,value){

			html+='<button type="button" class="btn btn-default category" data-id="'+value.id+'" >'+value.name+'</button>'				 
			options+='<option value="'+value.id+'" >'+value.name+'</option>' 	

			})
		//console.log(html);
			$("#categorylist").html(html);
			$("#category").append(options);
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


$("#save").click(function(){

	var param=$("#movieform").serialize();

	
	$.post('./api/savemovie.php',param ,function(data){
		console.log(data);		


		data = $.parseJSON(data);

		$("#moviemodal").modal('hide');	
		if(data.status=="success")
		{
			
			$("body").prepend('<div class="alert alert-success alert-dismissible" role="alert">  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>New Movie Added</strong></div>')
	
		}
		else
		{
			$("body").prepend('<div class="alert alert-success alert-dismissible" role="alert">  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong> Some Error Occured</strong></div>');
	
		}
		

	});

})


