<?php

// Include the connection file
include '../Settings/connection.php';

// Check for GET data, else redirect
if(isset($_GET['id'])) 
{
    // Retrieve registration ID from the GET data
    $registrationID = $_GET['id'];

    // Write your UPDATE query to set the approval status to 'approved'
    $sql = "UPDATE registration SET approvalStatus = 'approved' WHERE registrationID = $registrationID";

    // Execute the query
    if(mysqli_query($con, $sql)) 
    {
        // Redirect to a suitable page after approving the registration
        header("Location: ../Organization/Organization_Registered_Students_View.php");
        
    } 
    
    else 
    {
        // If execution fails, display an error message
        echo "Error approving registration: " . mysqli_error($con);
    }
} 

else 
{
    // If GET data is not set, redirect
    header("Location: ../Organization/Organization_Registered_Students_View.php");
}


