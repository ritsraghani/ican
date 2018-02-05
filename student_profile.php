<?php
session_start(); 
if(isset($_SESSION['email'])){
    // echo "session variables are set.";
    // print_r($_SESSION);

    include_once('header.php');
?>

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


<div class="container">

    <div class="l3 m3 s6 x12 xs12 margin-bottom" style="position:relative;">
        <div style="position:relative;">       
            <img src="images/student/<?php echo $_SESSION['image']; ?>" style="width:100%;">
            <div class="profile_image_div">       
            <h2 class="profile_name"> <?php echo $_SESSION['first_name']. ' '. $_SESSION['last_name']; ?></h2>
            </div>
        </div> 


        <ul style="list-style-type:none;" class="profile_list">
            <li><div class="list_items dark-magenta"><img class="icons" src="images/icons/calendar.svg"><?php echo "<span class='list_values'>" . $_SESSION['dob'] ."</span>";?></div></li>
            <li><div class="list_items dark-magenta"><img class="icons" src="images/icons/genders.svg"><?php echo "<span class='list_values'>" . $_SESSION['gender']."</span>";?></div></li>
            <li><div class="list_items dark-magenta"><img class="icons" src="images/icons/smartphone.svg"><?php echo "<span class='list_values'>" . $_SESSION['phone']."</span>";?></div></li>
            <li><div class="list_items dark-magenta"><img class="icons" src="images/icons/email.svg"><?php echo "<span class='list_values'>" . $_SESSION['email'] ."</span>";?></div></li>
        </ul>
  
    </div>

    <div class="l9 m9 s6 x12 xs12">
    <?php echo "<h2 class='dark-magenta'>". "Welcome ".$_SESSION['email']. "</h2>"; ?>
        <div>
            <h4 class="dark-magenta"> About !can...... Learn More </h4>
            <p class="dark-blue">
                Lorem ipsum dolor sit amet, omnis officiis sed an, per sonet nobis eu. Id eum malis honestatis, enim aliquip ex sit, ei has velit facilis dignissim. Nam an atqui errem. Nihil tation meliore no eam, ei pro suas nibh indoctum.
                Mollis audire scriptorem in mei, vix posse vocent accusamus et, id posse eirmod blandit mei. Possim lucilius ea sea, has dicant voluptatibus eu, ignota labitur deseruisse his no. Nibh mnesarchum ei his, ne illum affert partiendo has. Viris maiorum qui ex. Audire theophrastus cu duo, ad tibique mnesarchum vix.
                Cu numquam voluptua intellegebat qui, quo graeco alterum periculis ex. 
                Graeci persequeris pri et, mel alterum denique ut. Vix ne vidit euripidis scripserit. Id adhuc porro omnium quo, vero adolescens usu ut. Odio voluptatum mea ad, et eum alii dolor.
                Atqui singulis recusabo usu at. Error saepe impedit qui ut. Ullum errem democritum duo ut. In virtute minimum lucilius mel, at doctus intellegat reprehendunt vis.
                In falli partem verear mei, in his sale ridens nostro. Prompta molestiae consetetur ea nec, ad nec nonumy ubique persius, nec ne commune dissentiet. Noster scripta atomorum at pri, id nam ullum accumsan. Ius malis laoreet ea, vitae diceret suscipit eum ut. Eu qualisque incorrupte sea. Mei vivendum legendos cu, cum ea zril legere moderatius, habeo iusto contentiones te vim.
            </p>
        </div>
        <div>
            <h4 class="dark-magenta"> Browse through quizz <?php $_SESSION['XYZ']; ?> </h4>
            <div class="quizz">
               <?php include('quizz.php'); ?>
            </div>
        </div>
    </div>

</div>

<?php
include('footer.php');
}

else{ ?>
<script>
    alert("Login first");</script>
    <?php
    include_once('login.php');
}
?>