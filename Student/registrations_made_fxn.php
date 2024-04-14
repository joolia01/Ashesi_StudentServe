<?php


// Include the Get_Student_Registrations.php 
include '../Student/Get_Student_Registrations.php';

function displayRegisteredStudents()
{
    // global $conn;

    // Execute the function  and assign the ouput to a variable (let's say var_data)
    $var_data = getRegisteredStudents();

    // Using the variable (var_data) object, create the display rows and elements 
    if ($var_data) 
    {
        // Loop through the fetched data and create display rows and elements

        foreach ($var_data as $registeredStudent) 
        {
            
            echo "<tr>
            <td>".$registeredStudent['studentID']." </td>
            <td>".$registeredStudent['firstName']." </td>
            <td>".$registeredStudent['lastName']." </td>
            <td>".$registeredStudent['gender']." </td>
            <td>".$registeredStudent['dob']." </td>
            <td>".$registeredStudent['phoneNumber']." </td>
            <td>".$registeredStudent['interest']." </td>
            <td>".$registeredStudent['skills']." </td>
            <td>".$registeredStudent['previousExperiences']." </td>
            <td>".$registeredStudent['gpa']." </td>
            <td>".$registeredStudent['email']." </td>
            <td>".$registeredStudent['registerDate']." </td>
            <td>".$registeredStudent['oppID']." </td>
            <td>".$registeredStudent['approvalStatus']." </td>
            </tr>";
        }

       
    } 
    
    else 
    {

        echo "Registrations you have made";
    }

}

