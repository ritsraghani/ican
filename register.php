<?php include'header.php' ?>


<div class="container top-margin-page margin-bottom">
    
    <form action="email_verify.php" method="POST">
        <h2 class="dark-magenta"> Registration Form</h2>

        <div class="l6 m6 s6 x12 xs12">           

            <label class="l4 m4 s4 x4 xs4 dark-magenta align-label center-block" for="username">Username :</label>
            <input class="l8 m8 s8 x8 xs8" type="text" id="username" name="username" placeholder="Enter username">

            <label class="l4 m4 s4 x4 xs4 dark-magenta align-label center-block" for="email">Email ID :</label>
            <input class="l8 m8 s8 x8 xs8" type="text" id="email" name="email" placeholder="Enter email id">
            
            <label class="l4 m4 s4 x4 xs4 dark-magenta align-label center-block" for="password">Password :</label>
            <input class="l8 m8 s8 x8 xs8" type="password" id="password" name="password" placeholder="Set Password">
        
            <button class="center-block button_default bg-dark-magenta body-color" id="submit" type="submit" value="Submit" name="submit"> Submit </button>
        </div>

        <div class="l6 m6 s6 x12 xs12">
            <label class="l4 m4 s4 x4 xs4 dark-magenta align-label center-block" for="dob">Date of Birth :</label>
            <input class="l8 m8 s8 x8 xs8" type="text" id="dob" name="dob" placeholder="Enter dob">

            <label class="l4 m4 s4 x4 xs4 dark-magenta align-label center-block" for="gender">Gender :</label>
            <select class="l8 m8 s8 x8 xs8" id="gender" name="gender">
                <option value="1">Female</option>
                <option value="0">Male</option>               
            </select>
            
            <label class="l4 m4 s4 x4 xs4 dark-magenta align-label center-block" for="phone_no">Phone :</label>
            <input class="l8 m8 s8 x8 xs8" type="phone_no" id="phone_no" name="phone_no" placeholder="Enter Mobile No.">

        </div>
    </form>    
</div>


<?php include'footer.php' ?>
