<?php 
include('header.php');

?>
<div class="container">
    <h2 class="dark-blue">All quiz types</h2>
    <form name="search_form" method="GET">
        <h3 class="search dark-blue"> <input type="text" name="search" id="search"> &nbsp; 
        <button class="button_default bg-dark-blue" name="search_btn" id="search_btn">Search</button></h3>
    </form>
    <script>
        $( "#search" ).keyup(function() {
            var word=$( this ).val();       
        });
    </script>
<?php

if(isset($_GET['search']) && !empty($_GET['search'])){
    require 'connection.php';
    try {
    $search_word = $_GET['search'];
    $conn = new PDO("mysql:host=$servername;dbname=ican", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="Select * from quiz_types where quiz_name LIKE '%$search_word%'";
    $result = $conn->prepare($sql);
    $result->execute();
    $final_results = $result->fetchAll(PDO::FETCH_ASSOC);

    $i=0;
    ?>
    <div class="l12 m12 s12 x12 xs12">

    <?php    
    
    foreach ($final_results as $key => $quiz_types) {   ?>
        <div class="l3 m3 s3 x12 xs12 center-block light-magenta" id="<?php echo $quiz_types['quiz_name']; ?>">
        <a href='quiz_details.php?id=<?php echo $quiz_types['id'];?>' id="<?php echo $quiz_types['id'];?>">
            <img src="images/<?php echo $quiz_types['quiz_image'];?>" class="quiz_image" alt="alt_text">
        </a>
        <h4><?php echo $quiz_types['quiz_name'];  $i++; ?> </h4></div> 
        <?php
        if($i%4==0){
            echo "</div>";
            echo "<div class='l12 m12 s12 x12 xs12'>";
        }
    }
    ?>

    </div>

    <?php     
    }

    catch(PDOException $e){
        $success=0;
        $message= "Connection failed: " . $e->getMessage();
    }
}

else{
    include('quizz.php');
}
?>
</div>
<?php
include('footer.php');
?>

