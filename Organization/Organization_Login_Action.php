<?php

//Start session using the php session method
session_start();

//Include the connection file
include '../Settings/connection.php';

/*Check if the login button was clicked
    If the above fails, stop processing and provide appropriate message or redirection
    Else continue processing from the next step below
*/
if (isset($_POST['loginbtn']))
{

    // Collect form data and store in variables (use appropriate method- GET/POST)
    $organizationName = mysqli_real_escape_string($con, $_POST['organizationName']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Write a query to SELECT a record from the Organization table using the email
    $sql = "SELECT * FROM organization WHERE email ='$email';";

    //Execute a query using the connection file
    $result = mysqli_query($con, $sql);

    // Check if any row was return 
        // If no record found, provide appropriate response(user not registered, incorrect userame or password)
        // If a record is found continue with processing below
    if (mysqli_num_rows($result) > 0)
    {

        //Fetch the record
        $row = mysqli_fetch_array($result);

        // Debugging: Print out hashed password from database
        echo "Hashed Password from Database: " . $row['passwd'] . "<br>";

        //Verify password user provided against database record using the php method passowrd-verify()
            // If verification fails, provide appropriate response
            //If it's a match, contibue with the processing below
        if(password_verify($password, $row["passwd"]))
        {
            // Create a session for user id and role id
            $_SESSION['user_id'] = $row['organizationID'];
            $_SESSION['user_role'] = $row['rid'];

            // Redirect to home page
            header('Location: ../Organization/Organization_Homepage.php');
        }

        else
        {
            echo "Incorrect email or password";
        }

    }

    else
    {
        echo "User not registered"; 
    }
    


}

else
{
    echo "Login button not clicked"; 
}



