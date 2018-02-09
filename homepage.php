<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>HomePage</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/col.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/homepage.css"> -->
    <style>
        * {box-sizing:border-box}

        /* Slideshow container */
        .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Next & previous buttons */
        .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        margin-top: -22px;
        padding: 16px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        }

        /* Position the "next button" to the right */
        .next {
        right: 0;
        border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
        background-color: rgba(0,0,0,0.8);
        }

        /* Caption text */
        .text {
        color: white;
        font-size: 3em;
        padding: 8px 12px;
        position: absolute;
        bottom: 20%;
        width: 100%;
        text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
        cursor:pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
        }

        /* Fading animation */
        .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 0.5s;
        animation-name: fade;
        animation-duration: 0.5s;
        }

        @-webkit-keyframes fade {
        from {opacity: .4} 
        to {opacity: 0.5}
        }

        @keyframes fade {
        from {opacity: .4} 
        to {opacity: 0.5}
        }
    </style>
</head>
<body>

    <?php include('header.php')?>

    <div class="container-fluid" id="welcome">

    </div>
        
    <div class="container" id="welcome_text">
        <h1>Welcome to !can</h1>
        <h3>Start Browsing &darr; </h3>
    </div>

    <div class="container dark-magenta">
        <h2> Quiz Section &nbsp; <span class="small">Have fun solving all your favourites..!!!</span></h2>
        <hr class="light-magenta">
    </div>
        

    <?php include('quizz.php'); ?>

    <div class="container dark-magenta margin-bottom" id="testimonials">
        <div class="container">
            <h2 class="page-header"> Testimonials &nbsp; <span class="small">Customer reviews</span></h2>
        </div>
        <hr class="light-magenta">
        <div class="l4 m4 s6 x12 xs12">
            <blockquote class="blockquote light-magenta">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </blockquote>
        </div>

        <div class="l4 m4 s6 x12 xs12">
            <blockquote class="blockquote light-magenta">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </blockquote>
        </div>

        <div class="l4 m4 s12 x12 xs12">
            <blockquote class="blockquote light-magenta">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </blockquote>
        </div>
    </div>

    <div class="container dark-magenta margin-bottom" id="testimonials">
        <div class="container">
            <h2 class="page-header"> Other Features &nbsp; <span class="small">Let's have a look</span></h2>
        </div>
        <hr class="light-magenta">
    </div>    
        <!-- Slideshow container -->
        <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="numbertext">1 / 5</div>
            <img src="images/slider/1.jpg" style="width:100%">
            <div class="text">Learn and test your skills at home</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 5</div>
            <img src="images/slider/2.jpg" style="width:100%">
            <div class="text">Learn technical stuff</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 5</div>
            <img src="images/slider/3.jpg" style="width:100%">
            <div class="text">Speak with actions</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 5</div>
            <img src="images/slider/4.jpg" style="width:100%">
            <div class="text">Play quizz with !can</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">5 / 5</div>
            <img src="images/slider/5.jpg" style="width:100%">
            <div class="text">Responsive site... Play on ur phone</div>
        </div>

        <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

<?php include('footer.php') ?>


<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>

</body>
</html>
