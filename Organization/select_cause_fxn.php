<?php

// Include the connection file. 
include '../Settings/connection.php';

// Write a SELECT query on the causes table
$sql = "SELECT causeID, causeName FROM cause";

// Execute the query using the connection
$result = $con->query($sql); 

if ($result) //Checking if the result is not null or if the execution worked
{
    // Check if execution worked

    if ($result->num_rows > 0) 
    { 
        echo '<select id="causeDropdown" name="cause">';
        foreach ($result as $cause)
        {
            echo '<option value="'. $cause["causeID"] . '">' . $cause['causeName']. '</option>';
        }
        echo '</select>'; 
    }  
    else 
    { 
        echo "No records has been found"; 
    } 
}


