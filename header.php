<?php 
    /* Main page with two forms: sign up and log in */
    require 'connection.php';
    session_start();
?>
<html>
<head>
    <title>HomePage</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/col.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/homepage.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    

</head>
<body>

    <div id="menubar">
        <ul class="navbar_list">  
            <li class="navbar_items s-hide x-hide xs-hide"><a class="active" href="homepage.php">Home</a></li>
            <li class="navbar_items s-hide x-hide xs-hide"><a href="#news">News</a></li>
            <li class="navbar_brand"><a href="#"><img src="images/logo.png" id="company_logo" alt="company_logo"></a></li>
            <li class="navbar_items s-hide x-hide xs-hide"><a href="#contact">Contact</a></li>
            <li class="navbar_items s-hide x-hide xs-hide"><a href="#about">About</a></li>
        </ul>
        <!-- <form id="search"><input type="text"></form> -->
        <a href="login.php"><button class="button_default" id="login_btn">Login</button></a>
    </div>

</body>

</html>