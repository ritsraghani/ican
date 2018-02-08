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

            $final[$x]['choice']['qc_id'][]=$value['qc_id'];
            $final[$x]['choice']['right_choice'][]=$value['right_choice'];
            $final[$x]['choice']['choices'][]=$value['choice'];
            $y++;

            if($y%4==0){
                $x++;
            }
        }

        // echo "<pre>";
        // print_r($final);
        // echo "</pre>";

        echo '<div class="row top-margin-page" id="start_quiz_div">';
        echo '<h1 class="center-block start_q_h1"> Let\'s start the test </h1>';
        echo '</div>';
        echo '<div class="container margin-bottom">';
        $no=1;
        $x=[];
        $no_of_questions=[];
        foreach ($final as $key => $val) {      
            $id= $val['question']['q_id'];
            array_push($no_of_questions,$id);
            echo '<ul id='. $id .' class="question-ul">';
            foreach ($val['question'] as $key1 => $value1) {               
                if($key1=='question'){
                echo $no. '.     '.$value1;
                $no++;
                }           
            }

            $right_choice=[];
            foreach ($val['choice']['right_choice'] as $key => $value) {
                $right_choice[]=$value;
            }

            echo '<form action="">'; 
            $count=0;
            foreach ($val['choice']['choices'] as $key2 => $v2) {
                echo '<li class="choice-li"><input class="option-input radio" type="radio" name="'. $id .'"  value="' . $right_choice[$count] .  '"><label>'. $v2 . '</label></li>';                 
                $count++;
            }    
            echo '</form>';            
            echo "</ul>";
        }
        echo '<button class="button_default" type="submit" name="submit-quiz" id="submit-quiz" onclick="getScore()"> Finish </button>';
        echo '</div>';


        // print_r($no_of_questions);


    }
// }

    catch(PDOException $e){
    $success=0;
    $message= "Connection failed: " . $e->getMessage();
    }


include ('footer.php');
?>

<script>
    var no_of_questions=[];
    no_of_questions = <?php echo json_encode($no_of_questions); ?>;
    console.log(no_of_questions);

  function getScore() {
    var results=[];
    $(':radio:checked').each(function(){
    console.log($(this).val());
        results.push($(this).val());
    });  

    var res=[];
    var marked=0;
    var result_array=[];
    var score=0;
    var x=0;
    // for(x=0; x<no_of_questions.length; x++){
        $('input[type="radio"][name="'+ no_of_questions[x] +'"]:checked').each(function(){
           if(x<no_of_questions.length){
                x++;
                console.log(x);
           }
           
            var marked=$(this).val();
            if(marked==null){
                result_array.push("Not answered this question " + x);
            }
            if(marked==1) {
                result_array.push("Correct answer "+x);
                score +=1;
            }
            if(marked==0) {
                result_array.push("Wrong answer "+x);
            }
        });

    // var score=0;

    // results.forEach(function(element) {
    //     if(element==1){
    //         score += 1;
    //     }
    // }); 

    console.log(score);
    console.log(result_array)
    // alert(score);
       return score + "xyz";
  }  


</script>