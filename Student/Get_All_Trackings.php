<?php


//Include the connection file
include '../Settings/connection.php';

// Create a function that returns the result of the SELECT query
function getTrackings()
{
    global $con;

   // Write the SELECT all volunteer opprotunities query
   $sql = "SELECT activityDate, numberOfHours, descriptionOfActivity, achievements, feedback FROM tracking";

   // Execute the query using global connection
   $result = mysqli_query($con, $sql);

   // Check if execution worked
   if($result)
    {
        // Check if any record was returned
        if (mysqli_num_rows($result) > 0)
        {
            // Fetch records if above is successful and assign to variable
            $trackings = mysqli_fetch_all($result, MYSQLI_ASSOC);

            // Return the result variable: using the return command
            return $trackings;
        }
        else 
        {
            // No records found
            return []; // Return an empty array if no records found
        }
    }

    else
    {
        // Return false if there's an error
        return false;
    }
}



