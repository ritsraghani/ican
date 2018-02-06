<?php 
// session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in
        require 'login_verify.php';
    }    
    elseif (isset($_POST['register'])) { //user registering        
        require 'register.php';        
    }
}
?>

<body>
<?php  include('header.php'); ?>
    

<div class="container top-margin-page">
    <div class="l6 m6 s12 x12 xs12">
        <form action="login_verify.php" method="POST">
            <h2 class="dark-magenta"> Student Login</h2>
            <label class="l3 m3 s3 x3 xs3 dark-magenta align-label" for="email">Email ID:</label>
            <input class="l9 m9 s9 x9 xs9" type="text" id="email" name="email" placeholder="Enter email">
            
            <label class="l3 m3 s3 x3 xs3 dark-magenta align-label" for="password">Password:</label>
            <input class="l9 m9 s9 x9 xs9" type="password" id="password" name="password" placeholder="Enter Password">
        
            <button id="login" type="submit" value="Submit" name="login"> Login </button>
        </form>
        <form action="register.php">
            <p>Not yet registered? &nbsp;<button id="register" type="submit" value="Submit" name="register"> Register here </button></p>
        </form>
    </div>

    <div class="l6 m6 s12 x12 xs12">
        <?php //include('login_page_animation.php') ?>
    </div>

</div>


<?php include('footer.php'); ?>
</body>

</html>