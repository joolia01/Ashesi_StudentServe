<!DOCTYPE html>
<html> 
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport", content = "width = device-width,initial-scale = 1.0">
    <title> StudentServe Volunteering Platform </title>
    <link rel="stylesheet" href="../css/studentOpportunityViewCSS.css">
    </head>
    <body>
        <form action="../Student/Register_For_Volunteer_Opportunity_Action.php" method="post" name ="register" id = "register">
            <div class="container">
              <h1>Volunteer Opportunity Register</h1>
              <p>Please fill in this form to register for a Volunteer Opportunity.</p>
              <hr>

              <!--Student ID-->
              <label for="studentID">Student ID:</label><br>
              <input type="text" pattern = "^[0-9]{8}$" id="studentID" name="studentID"placeholder="Enter your student ID" required>  <br> <br>

              <!--First Name-->
              <label for="fname">First name:</label><br>
              <input type="text" pattern = "[A-Za-z \-'']{2,}$"  id="fname" name="fname"placeholder="Enter your first name" required> <br> <br>

              <!--Last Name-->
              <label for="lname">Last name:</label><br>
              <input type="text" pattern = "[A-Za-z \-'']{2,}$" id="lname" name="lname"placeholder="Enter your last name" required>  <br> <br>

              <!--Gender-->
              <p>Please select your gender</p>
              <input type = "radio" id="male" name="gender">
              <label for="male">Male</label><br>
       
              <input type = "radio"id="female" name="gender">
              <label for="female">Female</label><br>  <br> 

              <!--Date of Birth-->
              <label for="dob">Date of Birth:</label><br>
              <input type="date" id="dob" pattern="\d{1,2}/\d{1,2}/\d{4}" name="dob" placeholder="Select your  date of birth" required> <br> <br>

              <!--Telephone Number-->
              <!--The numbers should start with a plus sign ( + ). It should be followed by Country code and National number.
              It may contain white spaces or a hyphen ( – ).
              the length of phone numbers may vary from 7 digits to 15 digits.-->
              <label for="phoneNumber">Phone number:</label><br>
              <input type="tel" id="phoneNumber" pattern="^[+]{1}(?:[0-9\-\(\)\/\.]\s?){6, 15}[0-9]{1}$" name="phoneNumber" placeholder="Enter your phone number" required> <br> <br>

              <!--Drop down for Interests-->  
              <label for="interests">Select your interest:</label> <br>

              <!--Include the select_interest_fxn.php-->
              <?php

              include '../Student/select_interest_fxn.php'; 

              ?>
              <br>
              <br>

              <!--Skills-->  
              <label for="skills">Skills:</label><br>
              <input type="text" pattern = "[A-Za-z -']{2,}$"  id="skills" name="skills"placeholder="Enter your skills" required> <br> <br>

              <!--Previous volunteering experiences-->  
              <label for="previousExperiences">Previous volunteering experiences:</label><br>
              <input type="text" pattern = "[A-Za-z -']{2,}$"  id="previousExperiences" name="previousExperiences"placeholder="Enter you previous volunteering experiences:" required>  <br> <br>

              <!--GPA-->  
              <label for="gpa">GPA:</label><br>
              <input type="text" pattern = "^[0-3](\.[0-9]{1,2})?$|^4(\.[0]{1,2})?$"  id="gpa" name="gpa"placeholder="Enter your GPA" required>  <br> <br>
      
              <!--Email--> 
              <label for="email"><b>Email</b></label>
              <input type="email"  pattern ="[a-z0-9._%+\-]+@ashesi\.edu\.gh$"  placeholder="Enter Email" name="email" id="email" required>  <br> <br>
          
              <!--Register Date-->
              <label for="registerDate">Register Date:</label><br>
              <input type="date" id="registerDate" pattern="\d{1,2}/\d{1,2}/\d{4}" name="registerDate" placeholder="Select the register date" required> <br> <br>


              <!--Opportunity ID -->
              <label for="opportunityID">opportunity ID:</label><br>
              <input type="text" pattern = "\b([0-9]|[1-9][0-9]*)\b" id="opportunityID" name="opportunityID"placeholder="Enter the opportunity ID" required>  <br> <br>

              <button type="submit" class="registerbtn" name="registerbtn">Register</button> <br> <br>
            </div>
          </form>

          <!-- Javascript Validation. Got assistance from w3schools -->
          <script>
        function validateForm() 
        {
            // Retrieve form elements
            let studentID = document.getElementById("studentID").value;
            let fname = document.getElementById("fname").value;
            let lname = document.getElementById("lname").value;
            let gender = document.querySelector('input[name="gender"]:checked');
            let dob = document.getElementById("dob").value;
            let phoneNumber = document.getElementById("phoneNumber").value;
            let skills = document.getElementById("skills").value;
            let previousExperiences = document.getElementById("previousExperiences").value;
            let gpa = document.getElementById("gpa").value;
            let email = document.getElementById("email").value;
            let registerDate = document.getElementById("registerDate").value;
            let opportunityID = document.getElementById("opportunityID").value;

            if (studentID === "" || fname === "" || lname === "" || !gender || dob === "" || phoneNumber === "" || skills === "" || previousExperiences === "" || gpa === "" || email === "" || registerDate === "" || opportunityID === "") {
                alert("Please fill in all fields");
                return false;
            }
        }
    </script>
    </body>
</html>