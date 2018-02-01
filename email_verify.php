<?php
require 'connection.php';

try {
    $conn = new PDO("mysql:host=$servername;dbname=ican", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $user=$_POST['username'];
    $email_id=$_POST['email'];
    $pass=$_POST['password'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone_no'];
    $target_dir ="images/student/";
    $image1=$target_dir.basename($_FILES['picture']['name']);
    $image=basename($_FILES['picture']['name']);
   
    $f_name=$_POST['first_name'];
    $l_name=$_POST['last_name'];

    // print_r($_FILES); die();

    $sql="INSERT INTO student (username,email_id, password,dob,gender,image,phone,first_name,last_name) VALUES ('$user','$email_id','$pass','$dob','$gender','$image','$phone','$f_name','$l_name')";
    $conn->exec($sql);

    echo "Registered Successfully";
    echo "Data inserted"."<br>";
		$move=move_uploaded_file($_FILES["picture"]["tmp_name"], $image1);
		if($move)
		{
			echo "images moved successfully";
			// header("location:product.php");
		}
    }


catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
    }

?>