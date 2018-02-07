<?php include'header.php';
    require_once('connection.php');
?>

<form action="" method="POST"  enctype="multipart/form-data" id="registration">
    <div class="container top-margin-page margin-bottom center-block">
    
    <h2 class="dark-magenta"> Add new Quiz</h2>
    <table id="add_quiz_table" style="margin-left:30%">
    <tr>
        <td>      
        <label class="dark-magenta align-label" for="quiz_name">Name of the Quiz :</label>
        </td> <td>
        <input type="text" id="quiz_name" name="quiz_name" placeholder="Enter here">          
        </td></tr>

        <tr>  <td>
        <label class="dark-magenta align-label" for="quiz_type">Select a type :</label>
        </td> <td>
        <select name="quiz_type">
            <option value="0">General</option>
            <option value="1">Programming</option>
            <option value="2">Front-End</option>
            <option value="3">Back-End</option>
            <option value="4">Android</option>
            <option value="5">IOS</option>
            <option value="6">Web Tech</option>
        </select>
        </td></tr>

        <tr><td>
        <label class="dark-magenta align-label" for="quiz_level">Select Difficulty Level :</label>
        </td><td>
        <select name="quiz_level">
            <option value="0">Easy</option>
            <option value="1">Medium</option>
            <option value="2">Difficult</option>
        </select>   
        </td></tr>

        <tr><td>      
        <label class="dark-magenta align-label" for="no_of_questions">Number of Questions :</label>
        </td><td>
        <input type="number" id="no_of_questions" name="no_of_questions" placeholder="Enter here">          
        </td></tr>

        <tr><td>
        <label class="dark-magenta align-label" for="picture">Upload Picture :</label>
        </td><td>
        <input type="file" name="picture" id="picture" />
        </td></tr>

        <tr> <td> </td>
        <td><input id="add" class="button_default dark-blue bg-transparent" type="submit" name="add" value="Add New Quiz"></td>
        </tr>
</table>        
    </div>

</form>    

<?php include'footer.php' ?>

<?php 
    if(isset($_POST['add'])){
       try{
            $conn = new PDO("mysql:host=$servername;dbname=ican", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $quiz_name=$_POST['quiz_name'];
            $quiz_type=$_POST['quiz_type'];
            $quiz_level=$_POST['quiz_level'];
            $no_of_questions=$_POST['no_of_questions'];
            $target_dir="images/";
            $image1=$target_dir.basename($_FILES['picture']['name']);
            $image=basename($_FILES['picture']['name']); 

            $sql="INSERT INTO quiz_types (quiz_name,quiz_type,quiz_level,no_of_questions,quiz_image) VALUES ('$quiz_name','$quiz_type','$quiz_level','$no_of_questions','$image')";

            if($conn->exec($sql)){
                $message ="Added Successfully";
            }

            $move=move_uploaded_file($_FILES["picture"]["tmp_name"], $image1);
            if($move){
                $message="Image Moved Successfully";
            }
          

       }
       catch(PDOException $e){
        $success=0;
        $message= "Connection failed: " . $e->getMessage();
        }
    }

?>