<?php
// Include the connection file
include '../Settings/connection.php';

// Check if the form is submitted
if(isset($_POST['createOpportunityBtn']))
{
    // Collect form data and assign each to a variable
    $organizationName = mysqli_real_escape_string($con, $_POST['organizationName']);
    $cause = mysqli_real_escape_string($con, $_POST['cause']);
    $role = mysqli_real_escape_string($con, $_POST['role']);
    $descriptionRole = mysqli_real_escape_string($con, $_POST['descriptionRole']);
    $location = mysqli_real_escape_string($con, $_POST['location']);
    $startDate = mysqli_real_escape_string($con, $_POST['startDate']);
    $endDate = mysqli_real_escape_string($con, $_POST['endDate']);
    $volunteeringHours = mysqli_real_escape_string($con, $_POST['volunteeringHours']);
    $requirements = mysqli_real_escape_string($con, $_POST['requirements']);

    // Write your INSERT QUERY using the  variables
    $sql = "INSERT INTO volunteerOpportunity (organizationName, cause, studentRole, volunteerDescription, volunteerLocation, startDate, endDate, numberOfHoursDaily, requirements) VALUES ('$organizationName','$cause','$role','$descriptionRole',' $location','$startDate','$endDate','$volunteeringHours', '$requirements' )";


    // Execute the query using the connection from the connection file
    if(mysqli_query($con, $sql))
    {
        //echo "Submitted";
        // Redirect back to chore_control_view.php after successful add
        header('Location: ../Organization/Organization_Homepage.php');
        exit();
    }
    else
    {
        // Handle database errors appropriately
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

