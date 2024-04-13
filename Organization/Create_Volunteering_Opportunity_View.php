<!-- Volunteer Opportunities:
This page is to allow organizations to create volunteer opportunities for students-->
<!DOCTYPE html>
<html> 
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport", content = "width = device-width,initial-scale = 1.0">
    <title> StudentServe Volunteering Platform </title>
    </head>
    <body>
        <form action="../Organization/Create_Volunteering_Opportunity_Action.php" method="post" name ="createOpportunity" id = "createOpportunity">
            <div class="container">
              <h1>Create Volunteer Opportunities</h1>
              <p>Please fill in this form to create a volunteer opportunity.</p>
              <hr>

              <!--Organization Name-->
              <label for="organizationName">Organization Name:</label><br>
              <input type="text" pattern = "[A-Za-z -']{2,}$" id="organizationName" name="organizationName"placeholder="Enter the organization Name" required>  <br> <br>

              <!--Drop down for Cause-->  
              <label for="cause">Select your cause:</label> <br> <br>

              <!--Include the select_cause_fxn.php-->
              <?php

              include '../Organization/select_cause_fxn.php'; 
              
              ?>
              <br>
              <br>

              <!--Role of Volunteer-->
              <label for="role">Volunteer role:</label><br>
              <input type="text" pattern = "[A-Za-z -']{2,}$"  id="role" name="role"placeholder="Enter the volunteer role" required> <br> <br>

              <!--Description of role-->
              <label for="descriptionRole">Description of role:</label><br>
              <input type="text" pattern = "[A-Za-z -']{2,}$" id="descriptionRole" name="descriptionRole"placeholder="Enter the description of role" required>  <br> <br>

              <!--Location-->
              <label for="location">Location:</label><br>
              <input type="text" pattern = "[A-Za-z -']{2,}$" id="location" name="location"placeholder="Enter the location" required>  <br> <br>
              
              <!--Start Date-->
              <label for="startDate">Start Date:</label><br>
              <input type="date" id="startDate" pattern="\d{1,2}/\d{1,2}/\d{4}" name="startDate" placeholder="Select the start date" required> <br> <br>
              
              <!--End Date-->
              <label for="endDate">End Date:</label><br>
              <input type="date" id="endDate" pattern="\d{1,2}/\d{1,2}/\d{4}" name="endDate" placeholder="Select the end date" required> <br> <br>
              

              <!--Number of Volunteering Hours Daily -->
              <label for="volunteeringHours">Number of Volunteering Hours Daily:</label><br>
              <input type="text" pattern = "\b([0-9]|[1-9][0-9]*)\b" id="volunteeringHours" name="volunteeringHours"placeholder="Enter the number of Volunteering Hours Daily " required>  <br> <br>

              <!--Volunteering Requirements-->
              <label for="requirements">Requirements:</label><br>
              <input type="text" pattern = "[A-Za-z -']{2,}$" id="requirements" name="requirements"placeholder="Enter the volunteering requirements" required>  <br> <br>

              
              <button type="submit" class="createOpportunityBtn" name ="createOpportunityBtn">Create Volunteer Opportunity</button> <br> <br>
            </div>
          </form>
          
      <!-- Javascript Validation. Got assistance from w3schools -->
      <script>
        function validateForm() 
        {
            let organizationName = document.forms["createOpportunity"]["organizationName"].value;
            let role = document.forms["createOpportunity"]["role"].value;
            let descriptionRole = document.forms["createOpportunity"]["descriptionRole"].value;
            let location = document.forms["createOpportunity"]["location"].value;
            let startDate = document.forms["createOpportunity"]["startDate"].value;
            let endDate = document.forms["createOpportunity"]["endDate"].value;
            let volunteeringHours = document.forms["createOpportunity"]["volunteeringHours"].value;
            let requirements = document.forms["createOpportunity"]["requirements"].value;

            if (organizationName == "" || role == "" || descriptionRole == "" || location == "" || startDate == "" || endDate == "" || volunteeringHours == "" || requirements == "") {
                alert("Please fill in all fields.");
                return false;
            }
            return true;
        }
    </script>
    </body>
</html>
