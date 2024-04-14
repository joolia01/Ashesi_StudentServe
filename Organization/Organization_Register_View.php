<!DOCTYPE html>
<html> 
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport", content = "width = device-width,initial-scale = 1.0">
    <title> StudentServe Volunteering Platform </title>
    <link rel="stylesheet" href="../css/organizationRegisterCSS.css">
    </head>
    <body>
        <form action="../Organization/Organization_Register_Action.php" method="post" name ="register" id = "register">
            <div class="container">
              <h1>Orgaization Register</h1>
              <p>Please fill in this form to create an account.</p>
              <hr>
              <!--Organization Name-->
              <label for="organizationName">Organization name:</label><br>
              <input type="text" pattern = "[A-Za-z \-'']{2,}$"  id="organizationName" name="organizationName"placeholder="Enter your organization name" required> <br> <br>

              <!--Mission-->
              <label for="mission">Mission:</label><br>
              <input type="text" pattern = "[A-Za-z \-'']{2,}$" id="mission" name="mission"placeholder="Enter your mission" required>  <br> <br>

              <!--Drop down for Cause-->  
              <label for="cause">Select your cause:</label> <br> <br>

              <!--Include the select_cause_fxn.php-->
              <?php

              include '../Organization/select_cause_fxn.php'; 
              
              ?>
              <br>
              <br>

              <!--Oragization Type-->
              <p>Please select your organization type</p>
              <input type = "radio" id="non-profit" name="organizationType">
              <label for="non-profit">Non-profit Orgaization</label><br>
       
              <input type = "radio"id="for-profit" name="organizationType">
              <label for="for-profit">For-profit Orgaization</label><br>

              <input type = "radio"id="government" name="organizationType">
              <label for="government">Government Orgaization</label><br>  <br> 

              <!--Telephone Number-->
              <!--The numbers should start with a plus sign ( + ). It should be followed by Country code and National number.
              It may contain white spaces or a hyphen ( – ).
              the length of phone numbers may vary from 7 digits to 15 digits.-->
              <label for="phoneNumber">Phone number:</label><br>
              <input type="tel" id="phoneNumber" pattern="^[+]{1}(?:[0-9\-\(\)\/\.]\s?){6, 15}[0-9]{1}$" name="phoneNumber" placeholder="Enter your phone number" required> <br> <br>

              <!--Email--> 
              <label for="email"><b>Email</b></label>
              <input type="email"  pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" placeholder="Enter Email" name="email" id="email" required>  <br> <br>
          
              <!--Password--> 
              <label for="password"><b>Password</b></label>
              <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Enter Password" name="password" id="password" required>  <br> <br>
          
              <button type="submit" class="registerbtn" name = "registerbtn">Register</button> <br> <br>
            </div>
            
            <div class="container signin">
              <p>Already have an account? <a href="../Organization/Organization_Login_View.php">Sign in</a>.</p>
            </div>
          </form>

    <!-- Javascript Validation. Got assistance from w3schools -->
    <script>
        function validateForm() 
        {
            let orgName = document.forms["register"]["organizationName"].value;
            let mission = document.forms["register"]["mission"].value;
            let phoneNumber = document.forms["register"]["phoneNumber"].value;
            let email = document.forms["register"]["email"].value;
            let password = document.forms["register"]["password"].value;

            if (orgName == "" || mission == "" || phoneNumber == "" || email == "" || password == "") {
                alert("Please fill in all fields.");
                return false;
            }

            return true; 
        }
    </script>
    </body>
</html>