

<div class="container">

    <div class="l3 m3 s6 x12 xs12 margin-bottom" style="position:relative;">
        <div style="position:relative;">       
            <img src="images/student/<?php echo $image; ?>" style="width:100%;">
            <div style="left:0; bottom:0; position:absolute;">       
            <h2 style="color:white;"> <?php echo $f_name. ' '. $l_name; ?></h2>
            </div>
        </div> 

       <?php $gender = ($gender==0)?'Male':'Female'; ?>
        <ul style="list-style-type:none;" class="profile_list">
            <li><div class="list_items dark-magenta"><img class="icons" src="images/icons/calendar.svg"><?php echo "<span class='list_values'>" . $dob ."</span>";?></div></li>
            <li><div class="list_items dark-magenta"><img class="icons" src="images/icons/genders.svg"><?php echo "<span class='list_values'>" . $gender."</span>";?></div></li>
            <li><div class="list_items dark-magenta"><img class="icons" src="images/icons/smartphone.svg"><?php echo "<span class='list_values'>" . $phone."</span>";?></div></li>
            <li><div class="list_items dark-magenta"><img class="icons" src="images/icons/email.svg"><?php echo "<span class='list_values'>" . $email_id ."</span>";?></div></li>
        </ul>
  
    </div>

    <div class="l9 m9 s6 x12 xs12">
    <?php echo "<h2 class='dark-magenta'>". "Welcome ".$email_id. "</h2>"; ?>
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
            <h4 class="dark-magenta"> Browse through quizz </h4>
            <div class="quizz">
               <?php ?>
            </div>
        </div>
    </div>

</div>
