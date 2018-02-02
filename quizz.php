<?php
require 'connection.php';

$success=0;
try {
    $conn = new PDO("mysql:host=$servername;dbname=ican", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="Select * from quiz_types";
    $result = $conn->prepare($sql);
    $result->execute();
    $final_results = $result->fetchAll(PDO::FETCH_ASSOC);

    $success=1;

    print_r($final_results);
    // foreach ($final_results as $key => $value) {
    //     # code...
    // }
}


catch(PDOException $e){
    $success=0;
    $message= "Connection failed: " . $e->getMessage();
}



?>