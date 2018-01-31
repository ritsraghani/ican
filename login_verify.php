<?php
require 'connection.php';

try {
    $conn = new PDO("mysql:host=$servername;dbname=ican", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected ";
    }
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
    }

$email = $_POST['email'];
$password= $_POST['password'];

$sql="SELECT * FROM student where email_id='$email'";
$result = $conn->prepare($sql);
$result->execute();
$final_results = $result->fetchAll(PDO::FETCH_ASSOC);
$number_of_rows = $result->rowCount();

if ($number_of_rows == 0 ){ 
    $message = "User not registered";
    // echo $message;
    header('location: register.php');
}
else {
    if ($final_results[0]['password']==$password) { 
        $_SESSION['logged_in'] = true;

        print_r($final_results);
        
        echo "Login Successful";
    }
    else {
        echo "Incorrect password";
    }
}

?>