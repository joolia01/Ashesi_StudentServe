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
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Encrypt the password using the php method password_hash() and store the encrypted version in a varaible
    $hash_password = password_hash($password, PASSWORD_DEFAULT);

    //Write your INSERT QUERY using the variables above. Use a default number of 3 for the rid/field column in the People table
    // 3 is for standard users
    $sql = "INSERT INTO student (studentID, firstName, lastName, gender, dob,phoneNumber, interest, skills, previousExperiences, gpa, email, passwd, rid) VALUES ('$studentID', '$fname','$lname',' $gender','$dob', '$phoneNumber',' $interests','$skills', '$previousExperiences', '$gpa','$email','$hash_password', 3)";

    // Check if execution worked
    if(mysqli_query($con, $sql))
    {
        // Redirect to login_view page if execution is successful
        header("Location: ../Student/Student_Login_View.php");
    }

    else
    {
        //Else take appropriate action (display error on register_view page)
        echo "Error: " . $sql . "<br>" . $con->error;
    }

}



