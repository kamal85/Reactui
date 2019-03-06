<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <body>
  	<div class="container">
  		<h1 class="text-center">Insert data using ajax php and mysql</h1>
  		<br>
  		<div class="col-md-6 col-md-offset-3">
	  		<form id="myform" action='insertdata.php' method="post">
	  			<div class="form-group">
	  				<label>User Name: </label>
	  				<input type="text" name="username" class="form-control" required/>
	  			</div>
	  			<div class="form-group">
	  				<label>Password: </label>
	  				<input type="text" name="password" class="form-control" required/>
	  			</div>
	  			<input type="submit" value="Submit" id="submit" class="btn btn-success" />
	  		</form>
  		</div>
  		<div style="clear: both;"></div>
  		<br>
  		<h1 class="text-center bg-dark text-white">Display Data Using Ajax</h1>
  		<br>

  		<button id="displaydata" class="btn btn-danger">Display Data</button>
  		<br><br>
  		<table class="table table-striped table-border">
  			<thead>
  				<th>Id</th>
  				<th>User Name</th>
  				<th>Password</th>
  			</thead>
  			<tbody id="responsive">
  				
  			</tbody>
  		</table>
  	</div>
	<script type="text/JavaScript">
		$(document).ready(function(){
			//var form = $(#myform);
			$('#submit').click(function(){
				$.ajax({
					url: form.attr("action"),
					type:'post',
					data: $("#myform input").serialize(),
					success: function(data){
						console.log(data);
					}
				});
			});

			$('#displaydata').click(function(){
				$.ajax({
					url:'displayajax.php',
					type:'post',
					success:function(responsivedata){
						$('#responsive').html(responsivedata);
					}
				})
			})

		});

	</script>
  	
  </body>
</html>