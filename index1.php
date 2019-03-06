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
  		<h1 class="text-center">Ajax Asynchonous Javascript and XML</h1>
  		<br>
  		<div class="col-md-6 col-md-offset-3">
	  		<form id="myform" action='' method="get">
	  			<div class="form-group">
	  				<label>User Name: </label>
	  				<input type="text" name="username" class="form-control" required/>
	  			</div>
	  			<div class="form-group">
	  				<label>Password: </label>
	  				<input type="text" name="password" class="form-control" required/>
	  			</div>
	  			<div class="form-group">
	  				<label>Chose State</label>
	  				<select class="form-control" onchange="myfun(this.value);">
	  					<option>Select State</option>
	  					<option>Maharastra</option>
	  					<option>Bihar</option>
	  					<option>UP</option>
	  					<option>Chhattisgarh</option>
	  					<option>MP</option>
	  				</select>
	  			</div>
	  			<div class="form-group">
	  				<label>Chose City</label>
	  				<select class="form-control" id="city">
	  					<option>Select City</option>
	  				</select>
	  			</div>
	  			<input type="submit" value="Submit" id="submit" class="btn btn-success" />
	  		</form>
  		</div>
  		

  	</div>


	<script type="text/JavaScript">
		function myfun(data){
			//alert(data);

			var req = new XMLHttpRequest();
			req.open("GET", "http://localhost/ajaxfile/response.php?datavalue="+data,true);
			req.send();
			req.onreadystatechange = function(){
				if(req.readyState == 4 && req.status == 200){
					document.getElementById("city").innerHTML = req.responseText
					//alert('city');
				}
			}
		}

	</script>
  	
  </body>
</html>