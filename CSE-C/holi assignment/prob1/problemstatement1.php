<?php
require_once('dbconnection.php');
	
	$x = 0;
	if(isset($_POST['submit']))
	{
		$enroll = $_POST['enroll'];

		$sql = "select * from details where enrollment = '$enroll'";
		$re = mysqli_query($con,$sql);
		$num = mysqli_num_rows($re);
		if($num <= 0)
		{
			
			$name = $_POST['name'];
			$age = $_POST['age'];
			$course = $_POST['course'];
			$branch = $_POST['branch'];
			$contact = $_POST['contact'];
			$email = $_POST['email'];
			$sql = "INSERT INTO details(name,age,course,branch,contact,email,enrollment) values('$name','$age','$course','$branch','$contact','$email','$enroll')";
			$res = mysqli_query($con,$sql);
		}
		else
		{	echo "Data aleredy exist";}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET DETAILS</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body style="margin-left: 10%; margin-top: 1%">
	<a href="problemstatement1_read_update_delete.php" style="margin-left: 80% ">Read data</a>
	<h1><i>Details</i></h1><br>
<form action="problemstatement1.php" method=post class="form-group" style="margin-right: 100px ">
	Enter Enrolment number:<br>
	<input type="text" name="enroll" class="form-control"><br>
	Name:<br>
	<input type="text" name="name" class="form-control"><br>
	Age:<br>
	<input type="text" name="age" class="form-control"><br>
	Course:<br>
	<input type="text" name="course" class="form-control"><br>
	Branch:<br>
	<input type="text" name="branch" class="form-control"><br>
	Contact:<br>
	<input type="text" name="contact" class="form-control"><br>
	Email:<br>
	<input type="text" name="email" class="form-control"><br>
	<input type="submit" name="submit" class="btn btn-info">
</form>
</body>
</html>
