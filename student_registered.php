<?php
session_start();
require 'connection.php';

try {
    $conn = new PDO("mysql:host=$servername;dbname=ican", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $user=$_POST['username'];
    $email_id=$_POST['email'];
    $pass=$_POST['password'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone_no'];
    $target_dir ="images/student/";
    $image=basename($_FILES['picture']['name']);   
    $image1=$target_dir.basename($_FILES['picture']['name']);
    $f_name=$_POST['first_name'];
    $l_name=$_POST['last_name'];
    $message='';

    $sql="INSERT INTO student (username,email_id, password,dob,gender,image,phone,first_name,last_name) VALUES ('$user','$email_id','$pass','$dob','$gender','$image','$phone','$f_name','$l_name')";

    if($conn->exec($sql)){
    $message ="Registered Successfully";

        $gender = ($gender == 0) ?  'Female': 'Male';
        $_SESSION['email'] = $email_id;
        $_SESSION['first_name'] = $f_name;
        $_SESSION['last_name'] = $l_name;
        $_SESSION['message'] = "Registered Successfully  ";
        $_SESSION['image']= $image;
        $_SESSION['logged_in']=true;
        $_SESSION['phone']=$phone;
        $_SESSION['gender']=$gender;
        $_SESSION['dob']=['dob'];
        // echo $_SESSION['message'];
    }
    $move=move_uploaded_file($_FILES["picture"]["tmp_name"], $image1);
    if($move){   
        include('header.php');     
        echo "<div class='container center-block' style='min-height:300px;'>";
        echo "<h2 class='dark-magenta' style='vertical-align:middle;margin-top:10%'>"."Your email id: ". $_SESSION['email'];
        echo "<br><br>" . $_SESSION['message'] . "</h2>";

        echo "<br>";
        echo "<a href='login.php'><button class='button_default' style='color:#ac3b61;background-color:transparent;border-color:#ac3b61;'>Login to continue</button></a>";
        echo "</div>";
        include('footer.php');
    }
    else{
        echo "couldn't Move the image";
    }
}

catch(PDOException $e){
    $message= "Connection failed: " . $e->getMessage();
    }
?>


<script src="js/jquery-2.2.4.js"></script>

<script>
    $(document).ready(function () {
        $("#login_btn").val("Logout");
        $("#login_btn").html("Logout");
        $("#login_btn").text("Logout");  

        $("#login_btn").click(function(){
            <?php session_unset();
            session_destroy();
            // $_SESSION['xyz']="I have logged out"; ?>
        });               
    });
</script>

