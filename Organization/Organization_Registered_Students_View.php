<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashesi StudentServe Volunteering Platform</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="../css/registeredStudentsCSS.css">

  <?php
  //  Create and include the core file on this page to check if the user has logged in.
  // include '../settings/core.php';
  include '../Organization/organization_registered_students_fxn.php';

  // Check if the user is logged in using the function created on the core.php page 
  // checkLogin(); // Apparently this is not necessary at the moment  
  ?>
</head>
<body>
<main>
<!-- Display the list of registered students-->

<table border="1">
  <thead>
    <tr>
      <th colspan="13">Registered Students</th>
    </tr>
    <tr>
    <th>Student ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Gender</th>
      <th>Date of Birth</th>
      <th>Phone Number</th>
      <th>Interest</th>
      <th>Skills</th>
      <th>Previous Experiences</th>
      <th>GPA</th>
      <th>Email</th>
      <th>Register Date</th>
      <th>Opportunity ID</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <!-- Registered Students -->
    <?php
    displayRegisteredStudents();
    ?>
  </tbody>
</table>


</main>
</body>
</html>
