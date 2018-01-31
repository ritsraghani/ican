<?php
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$con= mysqli_connect('localhost','root','root', 'ican');

if(!$con)
{
echo "Connection failed";
}

else
{
	$sql= "select * from student where username='$username' and password='$password' ";
	
	if(mysqli_query($con,$sql))
	{		
	    header('location: homepage.php?student_id'); 		
	}
	else
	{
		echo "Login ID or password is incorrect";
	}
}
?>