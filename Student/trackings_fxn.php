<?php


// Include file
include '../Student/Get_All_Trackings.php';

function displayTrackings()
{
    // global $conn;

    // Execute the function  and assign the ouput to a variable (let's say var_data)
    $var_data = getTrackings();

    // Using the variable (var_data) object, create the display rows and elements 
    if ($var_data) 
    {
        // Loop through the fetched data and create display rows and elements

        foreach ($var_data as $tracking) 
        {
            
            echo "<tr>
            <td>".$tracking['activityDate']." </td>
            <td>".$tracking['numberOfHours']." </td>
            <td>".$tracking['descriptionOfActivity']." </td>
            <td>".$tracking['achievements']." </td>
            <td>".$tracking['feedback']." </td>
            </tr>";
        }

       
    } 
    
    else 
    {

        echo "trackings";
    }

}

