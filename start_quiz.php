<?php 
require 'connection.php';
include ('header.php');

// if(isset($_SESSION['email'])){

    $q_id=$_GET['id'];
    $final_results=[];
    try{
        $conn = new PDO("mysql:host=$servername;dbname=ican", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="Select * from quiz_questions where quiz_type_id='$q_id'";
        $result = $conn->prepare($sql);
        $result->execute();
        $final_results = $result->fetchAll(PDO::FETCH_ASSOC);

        $start_id=$final_results[0]['id'];
        $sql2 ="select * from quiz_choices where";

        echo "<pre>";
        print_r($final_results);
        echo "</pre>";
    }
    catch(PDOException $e){
    $success=0;
    $message= "Connection failed: " . $e->getMessage();
    }
// } 

include ('footer.php');
?>