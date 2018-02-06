<?php 
require 'connection.php';
include ('header.php');

// if(isset($_SESSION['email'])){

    $q_id=$_GET['id'];
    $final_results=[];
    try{
        $conn = new PDO("mysql:host=$servername;dbname=ican", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // $sql="Select * from quiz_questions where quiz_type_id='$q_id'";
        // $result = $conn->prepare($sql);
        // $result->execute();
        // $final_results = $result->fetchAll(PDO::FETCH_ASSOC);
        // echo "1";
        $stmt = $conn->prepare("SELECT qq.id as question_id, qq.quiz_type_id as type_id, qq.question as question, qc.quiz_question_id as qc_id, qc.choice as choices
                        FROM quiz_questions as qq 
                        JOIN quiz_choices AS qc ON  qc.quiz_question_id=qq.id
                        WHERE qq.quiz_type_id = '$q_id' "); 
        $stmt->execute();
         $final_results2 = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo "<pre>";
        print_r($final_results2);
        echo "</pre>";
        // foreach ($final_results2 as $key => $value) {
        //     # code...
        //     foreach ($value as $key1 => $value1) {
        //         # code...
        //         echo $value1;
        //     }
        // }


    }
    catch(PDOException $e){
    $success=0;
    $message= "Connection failed: " . $e->getMessage();
    // echo "error";
    }
// } 

include ('footer.php');
?>