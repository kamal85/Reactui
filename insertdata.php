<?php
	$con = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($con, 'ajaxdb');

	extract($_POST);

	if(!isset($_POST['submit'])){
		$q = "insert into data_tbl (username,password) value('$username','$password')";

		$query = mysqli_query($con, $q);
		header('location:index.php');
	}
	else
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

 ?>

 <?php
 /*$con=mysqli_connect("localhost","root","","ajaxdb");

$username=$_POST['username'];
$password=$_POST['password'];

// Perform a query, check for error
if (!mysqli_query($con,"insert into data_tbl (username,password) value('$username','$password')"))
  {
  echo("Error description:" . mysqli_error($con));
  }
  else
  {
  	header('location:index.php');
  }

mysqli_close($con);*/
?>