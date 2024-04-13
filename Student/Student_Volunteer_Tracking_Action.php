<?php
// Include the connection file
include '../Settings/connection.php';

// Check if the form is submitted
if(isset($_POST['trackOpportunityBtn']))
{
    // Collect form data and assign each to a variable
    $activityDate = mysqli_real_escape_string($con, $_POST['activityDate']);
    $volunteeringHours = mysqli_real_escape_string($con, $_POST['volunteeringHours']);
    $descriptionActivity = mysqli_real_escape_string($con, $_POST['descriptionActivity']);
    $achievements = mysqli_real_escape_string($con, $_POST['achievements']);
    $feedback = mysqli_real_escape_string($con, $_POST['feedback']);

    // Write your INSERT QUERY using the  variables
    $sql = "INSERT INTO tracking (activityDate, numberOfHours, descriptionOfActivity, achievements, feedback) VALUES ('$activityDate','$volunteeringHours','$descriptionActivity','$achievements',' $feedback')";


    // Execute the query using the connection from the connection file
    if(mysqli_query($con, $sql))
    {
        //echo "Submitted";
        // Redirect back to chore_control_view.php after successful add
        header('Location: ../Student/Student_Homepage.php');
        exit();
    }
    else
    {
        // Handle database errors appropriately
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

