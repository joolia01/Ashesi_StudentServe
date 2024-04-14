<?php
// Resources from w3schools and studentstutorial helped me wih the Logout

//Start session
//Unset the two session id during login_user_action
//Redirect to login_view page
//Use the exit() command afterwards

//Start session
session_start();

//Unset the two session id during login_user_action
if (isset($_SESSION["user_id"]) && isset($_SESSION["user_role"]))
{
    unset($_SESSION['user_id']);
    unset($_SESSION['user_role']);
}

//Redirect to login_view page
header('Location: ../Student/Student_Login_View.php');

//Use the exit() command afterwards
exit();
    
