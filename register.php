<?php include'header.php' ?>

<form action="student_registered.php" method="POST"  enctype="multipart/form-data" id="registration">
    <div class="container top-margin-page margin-bottom">
    
        <h2 class="dark-magenta"> Registration Form</h2>
            
        <div class="l6 m6 s6 x12 xs12">   
            <label class="l4 m4 s4 x4 xs4 dark-magenta align-label center-block" for="first_name">First Name :</label>
            <input class="l8 m8 s8 x8 xs8" type="text" id="first_name" name="first_name" placeholder="Enter First Name">

            <label class="l4 m4 s4 x4 xs4 dark-magenta align-label center-block" for="username">Username :</label>
            <input class="l8 m8 s8 x8 xs8" type="text" id="username" name="username" placeholder="Enter username">
         
            <label class="l4 m4 s4 x4 xs4 dark-magenta align-label center-block" for="email">Email ID :</label>
            <input class="l8 m8 s8 x8 xs8" type="text" id="email" name="email" placeholder="Enter email id">
            
            <label class="l4 m4 s4 x4 xs4 dark-magenta align-label center-block" for="password">Password :</label>
            <input class="l8 m8 s8 x8 xs8" type="password" id="password" name="password" placeholder="Set Password"> 

            <label class="l4 m4 s4 x4 xs4 dark-magenta align-label center-block" for="picture">Upload Picture :</label>

            <input type="file" name="picture" id="picture" />

            
        </div>

        <div class="l6 m6 s6 x12 xs12">
            <label class="l4 m4 s4 x4 xs4 dark-magenta align-label center-block" for="last_name">Last Name :</label>
            <input class="l8 m8 s8 x8 xs8" type="text" id="last_name" name="last_name" placeholder="Enter Last Name">
            
            <label class="l4 m4 s4 x4 xs4 dark-magenta align-label center-block" for="dob">Date of Birth :</label>
            <input class="l8 m8 s8 x8 xs8" type="text" id="dob" name="dob" placeholder="Enter dob">

            <label class="l4 m4 s4 x4 xs4 dark-magenta align-label center-block" for="gender">Gender :</label>
            <select class="l8 m8 s8 x8 xs8" id="gender" name="gender">
                <option value="1">Female</option>
                <option value="0">Male</option>               
            </select>
            
            <label class="l4 m4 s4 x4 xs4 dark-magenta align-label center-block" for="phone_no">Phone :</label>
            <input class="l8 m8 s8 x8 xs8" type="phone_no" id="phone_no" name="phone_no" placeholder="Enter Mobile No.">
            
            <input class="center-block button_default bg-dark-magenta body-color" id="submit" type="submit" value="Submit" name="submit"/> 
        </div>
    </div>

</form>    

<?php include'footer.php' ?>
<script>
    function clear() {
         document.getElementById('registration').reset();
    }
   
</script>