<?php
require 'connection.php';

$conn = new PDO("mysql:host=$servername;dbname=ican", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Escape email to protect against SQL injections
$email = 'rits.raghani@gmail.com';
$result = $conn->query("SELECT * FROM student WHERE email_id='rits.raghani@gmail.com' ");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
    // header("location: error.php");
    echo "Error";
}
else { // User exists
    $user = $result->fetch_assoc();

    if ( password_verify('ritu1993', $user['password']) ) {
        
        // $_SESSION['email'] = $user['email'];
        // $_SESSION['first_name'] = $user['first_name'];
        // $_SESSION['last_name'] = $user['last_name'];
        // $_SESSION['active'] = $user['active'];
        $_SESSION['logged_in'] = true;
        echo "Hello" . $email;
        // header("location: profile.php");
    }
    else {
        // $_SESSION['message'] = "You have entered wrong password, try again!";
        // header("location: error.php");
        echo "User Not found";
    }
}

?>