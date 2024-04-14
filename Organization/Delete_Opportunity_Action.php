<?php

// Include the connection file
include '../Settings/connection.php';


// Check for GET URL, else redirect 
if(isset($_GET['id'])) 
{
    // Retrieve id from the GET URL and store it in a variable
    $opportunity_id = $_GET['id'];

    // Write your DELETE query using the variables above (focusing on the id)
    $sql = "DELETE FROM volunteerOpportunity WHERE opportunityID = $opportunity_id";

    // Execute the query using the connection from the connection file
    if(mysqli_query($con, $sql)) 
    {
        // Redirect to chore display page (chore_control_view) is execution is successful
        header("Location: ../Organization/Create_Volunteering_Opportunity_View.php");
    } 
    else 
    {
        // If execution fails, take appropriate action (display error on chore_control_view page)
        echo "Error deleting chore: " . mysqli_error($con);
    }
} 

else 
{
    // If no id is provided in the GET URL, redirect to chore display page (chore_control_view.php)
    header("Location: ../Organization/Create_Volunteering_Opportunity_View.php");
}
