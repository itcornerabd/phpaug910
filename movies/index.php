<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap-theme.min.css">	

	<title>Movies</title>
</head>
<body>




<center>
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#moviemodal">
  Add New Movie
</button>
</center>
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



<div class="modal fade" id="moviemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        
      	<form id="movieform" >

      		<div class="form-group"	>
      			<input type="text" name="name" class="form-control" placeholder="Name">
      		</div>
      		<div class="form-group">
      			<select class="form-control" id="category" name="categoryid">
      				<option value="">--select category--</option>
      			</select>
      		</div>
      		<div class="form-group">
      			<input type="text" name="cast" placeholder="cast" class="form-control">
      		</div>
      		<div class="form-group">
      			<input type="date" name="releasedate" placeholder="releasedate" class="form-control" >
      		</div>
      		<div class="form-group">
      			<textarea name="plot" placeholder="plot" class="form-control"></textarea>
      		</div>
      	</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="save">Save changes</button>
      </div>
    </div>
  </div>
</div>



</body>
</html>
<script type="text/javascript" src="./js/jquery-3.1.0.min.js" ></script>
<script type="text/javascript" src="./js/bootstrap.min.js" ></script>

<script type="text/javascript" src="./js/index.js"></script>

