<?php

// Include the connection file
include '../Settings/connection.php';


// Check if the form is submitted
if(isset($_POST['registerbtn']))
{
    // Collect form data and assign each to a variable
    $organizationName = mysqli_real_escape_string($con, $_POST['organizationName']);
    $mission = mysqli_real_escape_string($con, $_POST['mission']);
    $cause = mysqli_real_escape_string($con, $_POST['cause']);
    $organizationType = mysqli_real_escape_string($con, $_POST['organizationType']);
    $phoneNumber = mysqli_real_escape_string($con, $_POST['phoneNumber']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Encrypt the password using the php method password_hash() and store the encrypted version in a varaible
    $hash_password = password_hash($password, PASSWORD_DEFAULT);

    //Write your INSERT QUERY using the variables above. Use a default number of 2 for the rid/field column in the People table
    // 2 is for admins
    $sql = "INSERT INTO organization (organizationName, mission, cause, organizationType, phoneNumber, email, passwd, rid) VALUES ('$organizationName','$mission','$cause',' $organizationType','$phoneNumber','$email','$hash_password', 2)";

    // Check if execution worked
    if(mysqli_query($con, $sql))
    {
        // Redirect to login_view page if execution is successful
        header("Location: ../Organization/Organization_Login_View.php");
    }

    else
    {
        //Else take appropriate action (display error on register_view page)
        echo "Error: " . $sql . "<br>" . $con->error;
    }

}



