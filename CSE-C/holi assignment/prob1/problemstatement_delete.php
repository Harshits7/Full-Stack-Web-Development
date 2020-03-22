<?php
require_once('dbconnection.php');
if($con)
	//echo $_GET['enrolment'];
	$id =$_GET['id'];
	$sql="DELETE from details where id='$id'";
	$res=mysqli_query($con,$sql);
	if($res)
	{
		header('Location:problemstatement1_read_update_delete.php');
	}
	else
		echo "not deleted";
?>
