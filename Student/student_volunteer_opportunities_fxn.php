<?php


// Include the get_all_chores_action.php function
include '../Organization/Get_All_Volunteer_Opportunities.php';

function displayVolunteerOpportunities()
{
    // global $conn;

    // Execute the function in the get_all_chores_action file and assign the ouput to a variable (let's say var_data)
    $var_data = getVolunteerOpportunities();

    // Using the variable (var_data) object, create the display rows and elements 
    if ($var_data) 
    {
        // Loop through the fetched data and create display rows and elements

        foreach ($var_data as $volunteerOpportunity) 
        {
            
            echo "<tr>
            <td>".$volunteerOpportunity['opportunityID']." </td>
            <td>".$volunteerOpportunity['organizationName']." </td>
            <td>".$volunteerOpportunity['cause']." </td>
            <td>".$volunteerOpportunity['studentRole']." </td>
            <td>".$volunteerOpportunity['volunteerDescription']." </td>
            <td>".$volunteerOpportunity['volunteerLocation']." </td>
            <td>".$volunteerOpportunity['startDate']." </td>
            <td>".$volunteerOpportunity['endDate']." </td>
            <td>".$volunteerOpportunity['numberOfHoursDaily']." </td>
            <td>".$volunteerOpportunity['requirements']." </td>
            <td><a href='../Student/Register_For_Volunteer_Opportunity_View.php?id=".$volunteerOpportunity['opportunityID']."'><i class='fa-regular fa-registered'></i></a> </td>
            </tr>";
        }

       
    } 
    
    else 
    {

        echo "volunteer opportunities";
    }

}

