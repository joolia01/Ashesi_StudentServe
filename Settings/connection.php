<?php
// Declare 4 constant variables to store the database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "SVP2025";

// Create connection. Use mysqli connection method
$con = new mysqli($servername, $username, $password, $database) or
die("could not connect database");

// Check connection. Check if connection worked
// Use the die() function if connection fails and display the error

if ($con->connect_error) 
{
  die("Connection failed: " . $con->connect_error);
}
//echo "Connected successfully";