<?php 

require 'connection.php';
$quiz_id=$_GET['id'];
$quiz_array=['General','Programming','Front-End','Back-End','Android','IOS','Webtech'];
$level_array=['Easy','Medium','Difficult'];
try {
    $conn = new PDO("mysql:host=$servername;dbname=ican", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="SELECT * from quiz_types where id='$quiz_id'";
    $result = $conn->prepare($sql);
    $result->execute();
    $final_results = $result->fetchAll(PDO::FETCH_ASSOC);
    $quiz_type=$final_results[0]['quiz_type'];
    $quiz_type_name =$quiz_array[$quiz_type];
    $temp=$final_results[0]['quiz_level'];
    $level = $level_array[$temp];
    $message ="Registered Successfully";

    // print_r($final_results);
    include_once('header.php');
?>

<div class="container  top-margin-page margin-bottom">

    <div class="l3 m3 s3 x12 xs12">
        <img class="quiz_image" src="images/<?php echo $final_results[0]['quiz_image'];?>">
        <h2 class="dark-blue"><?php echo $final_results[0]['quiz_name']; ?> </h2>
        <h4 class="dark-blue">Type :  <?php echo $quiz_type_name;?></h4>
        <h4 class="dark-blue">Level :  <?php echo $level;?></h4>
        <h4 class="dark-blue">No. Of Questions :  <?php echo $final_results[0]['no_of_questions'];?></h4>    
        
    </div>
    <div class="l9 m9 s9 x12 xs12 dark-blue">
        <h2> Description </h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>

        <h3> The Test </h3>
        <p>The test contains 40 questions and there is no time limit. </p>

        <p>The test is not official, it's just a nice way to see how much you know, or don't know, about <?php echo $final_results[0]['quiz_name']; ?>.</p>

        <h3>Count Your Score</h3>
        <p>You will get 1 point for each correct answer. At the end of the Quiz, your total score will be displayed. Maximum score is <?php echo $final_results[0]['no_of_questions'];?>  points.</p>

        <p>Start the Quiz</p>
        <p>Good luck!</p>
        <?php $id=$final_results[0]['id']; ?>
        <a href='start_quiz.php?id=<?php echo $id; ?>' ><button class="button_default dark-blue" id="start_quiz" type="submit">Start Quiz </button></a>
    </div>
</div>
   

<?php
    include_once('footer.php');
  
    
}
catch(PDOException $e){
    $success=0;
    $message= "Connection failed: " . $e->getMessage();
}

?>