<?php 
require 'connection.php';
include ('header.php');

// if(isset($_SESSION['email'])){

    $q_id=$_GET['id'];
    $final_results=[];
    try{
        $conn = new PDO("mysql:host=$servername;dbname=ican", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="SELECT q.quiz_type_id as qt_id, q.id as q_id, q.question as question, c.quiz_question_id as qc_id, c.choice_id as choice_id, c.choice as choice, c.is_right_choice as right_choice
                FROM quiz_choices as c  
                LEFT outer JOIN quiz_questions as q ON c.quiz_question_id=q.id
                where q.quiz_type_id='$q_id'";
        $result = $conn->prepare($sql);
        $result->execute();
        $results = $result->fetchAll(PDO::FETCH_ASSOC);

        // echo "<pre>";
        // print_r($results);
        // echo "</pre>";

        $final=[];
        $x=0;
        $question_array=[];
        $y=0;
        foreach ($results as $key => $value) {
            
            if(!in_array($value['question'],$question_array))
            {
            $final[$x]['question']['qt_id'] = $value['qt_id'];
            $final[$x]['question']['q_id'] = $value['q_id'];
            $final[$x]['question']['question'] = $value['question'];
              
            }
            array_push($question_array,$value['question']);

            $final[$x]['choice']['right_choice'][]=$value['right_choice'];
            $final[$x]['choice']['choices'][]=$value['choice'];
            $y++;

            if($y%4==0){
                $x++;
            }
        }

        echo "<pre>";
        print_r($final);
        echo "</pre>";

        // echo '<div class="container">';
        // $no=1;
        // foreach ($final as $key => $val) {
            
        //     foreach ($val['question'] as $key1 => $value1) {
               
        //         echo "<h3>";
        //         if($key1=='question'){
        //         echo $no. '.     '.$value1;
        //         $no++;}
        //         echo "</h3>"; 
            
        //     }

        //     foreach ($val['choice']['choices'] as $key2 => $value2) {
            
        //         echo "<p>".$value2."</p>";
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