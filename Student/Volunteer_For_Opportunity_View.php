<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashesi StudentServe Volunteering Platform</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="../css/volunteerViewCSS.css">

  <?php
  //  Create and include the core file on this page to check if the user has logged in.
  // include '../settings/core.php';
  include '../Student/student_volunteer_opportunities_fxn.php';

  // Check if the user is logged in using the function created on the core.php page 
  // checkLogin(); // Apparently this is not necessary at the moment  
  ?>
</head>
<body>
<main>
<!-- Display the list of Volunteer Opportunities-->

<table border="1">
  <thead>
    <tr>
      <th colspan="10">Volunteer Opportunities</th>
    </tr>
    <tr>
    <th>Opportunity ID</th>
      <th>Organization Name</th>
      <th>Cause</th>
      <th>Student Role</th>
      <th>Description</th>
      <th>Location</th>
      <th>Start Date</th>
      <th>End Date</th>
      <th>Hours Daily</th>
      <th>Requirements</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <!-- Volunteer Opportunities -->
    <?php
    displayVolunteerOpportunities();
    ?>
  </tbody>
</table>


</main>
</body>
</html>
