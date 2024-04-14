<!-- Volunteer Tracking:
This page is to allow students to track their volunteer opportunities-->
<!DOCTYPE html>
<html> 
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport", content = "width = device-width,initial-scale = 1.0">
    <title> StudentServe Volunteering Platform </title>
    <link rel="stylesheet" href="../css/trackingViewCSS.css">
    </head>
    <body>
        <form action="../Student/Student_Volunteer_Tracking_Action.php" method="post" name ="trackOpportunity" id = "trackOpportunity">
            <div class="container">
              <h1>Track your Volunteer Opportunities</h1>
              <p>Please fill in this form to track your volunteer opportunity.</p>
              <hr>

              <!--Activity Date-->
              <label for="activityDate">Activity  Date:</label><br>
              <input type="date" id="activityDate" pattern="\d{1,2}/\d{1,2}/\d{4}" name="activityDate" placeholder="Select the activity date" required> <br> <br>

              <!--Number of Volunteering Hours Completed Daily -->
              <label for="volunteeringHours">Number of Volunteering Hours Daily:</label><br>
              <input type="text" pattern = "\b([0-9]|[1-9][0-9]*)\b" id="volunteeringHours" name="volunteeringHours"placeholder="Enter the number of Volunteering Hours Completed Daily " required>  <br> <br>

              
              <!--Description of Activity-->
              <label for="descriptionActivity">Description of Activity:</label><br>
              <input type="text" pattern = "[A-Za-z -']{2,}$" id="descriptionActivity" name="descriptionActivity"placeholder="Enter a description of the activities done today" required>  <br> <br>

              <!--Achievements-->
              <label for="achievements">Achievements:</label><br>
              <input type="text" pattern = "[A-Za-z -']{2,}$" id="achievements" name="achievements"placeholder="Enter your achievements" required>  <br> <br>

              <!--Feedback-->
              <label for="feedback">Feedback:</label><br>
              <input type="text" pattern = "[A-Za-z -']{2,}$" id="feedback" name="feedback"placeholder="Enter your feedback" required>  <br> <br>

              
              <button type="submit" class="trackOpportunityBtn" name ="trackOpportunityBtn">Track your Volunteer Opportunity</button> <br> <br>
            </div>
          </form>
          
    <!-- Javascript Validation. Got assistance from w3schools -->
    <script>
    function validateForm() 
    {
        let activityDate = document.forms["trackOpportunity"]["activityDate"].value;
        let volunteeringHours = document.forms["trackOpportunity"]["volunteeringHours"].value;
        let descriptionActivity = document.forms["trackOpportunity"]["descriptionActivity"].value;
        let achievements = document.forms["trackOpportunity"]["achievements"].value;
        let feedback = document.forms["trackOpportunity"]["feedback"].value;

        if (activityDate === "" || volunteeringHours === "" || descriptionActivity === "" || achievements === "" || feedback === "") 
        {
            alert("Please fill in all fields.");
            return false;
        }

    return true; 
    }
    </script>
    </body>
</html>
