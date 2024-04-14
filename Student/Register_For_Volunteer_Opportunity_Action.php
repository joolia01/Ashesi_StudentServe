<?php

// Include the connection file
include '../Settings/connection.php';


// Check if the form is submitted
if(isset($_POST['registerbtn']))
{
    // Collect form data and assign each to a variable
    $studentID = mysqli_real_escape_string($con, $_POST['studentID']);
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $phoneNumber = mysqli_real_escape_string($con, $_POST['phoneNumber']);
    $interests = mysqli_real_escape_string($con, $_POST['interests']);
    $skills = mysqli_real_escape_string($con, $_POST['skills']);
    $previousExperiences = mysqli_real_escape_string($con, $_POST['previousExperiences']);
    $gpa = mysqli_real_escape_string($con, $_POST['gpa']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $registerDate = mysqli_real_escape_string($con, $_POST['registerDate']);
    $opportunityID = mysqli_real_escape_string($con, $_POST['opportunityID']);

   
    //Write your INSERT QUERY using the variables above. 
    $sql = "INSERT INTO registration (studentID, firstName, lastName, gender, dob,phoneNumber, interest, skills, previousExperiences, gpa, email, registerDate, oppID) VALUES ('$studentID', '$fname','$lname',' $gender','$dob', '$phoneNumber',' $interests','$skills', '$previousExperiences', '$gpa','$email','$registerDate','$opportunityID')";

    // Check if execution worked
    if(mysqli_query($con, $sql))
    {
        // Redirect to login_view page if execution is successful
        header("Location: ../Student/Student_Homepage.php");
    }

    else
    {
        //Else take appropriate action (display error on register_view page)
        echo "Error: " . $sql . "<br>" . $con->error;
    }

}



