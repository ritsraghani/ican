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
    // $image=$_FILES['image']['name'];
    $image='';


    $sql="INSERT INTO student (username,email_id, password,dob,gender,image,phone) VALUES ('$user','$email_id','$pass','$dob','$gender','$image','$phone')";
    $conn->exec($sql);

    echo "Registered Successfully";
    }


catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
    }

?>