<!DOCTYPE html>
<html> 
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport", content = "width = device-width,initial-scale = 1.0">
    <title> StudentServe Volunteering Platform </title>
    <link rel="stylesheet" href="../css/studentLoginCSS.css">
    </head>
    <body>
        <form action="../Student/Student_Login_Action.php" method="post" name ="login" id = "login">
            <div class="container">
              <h1>Student Login</h1>
              <p>Please fill in this form to log in.</p>
              <hr>
              <!--Student ID-->
              <label for="studentID">Student ID:</label><br>
              <input type="text" pattern = "^[0-9]{8}$" id="studentID" name="studentID"placeholder="Enter your student ID" required>  <br> <br>
      
              <!--Email--> 
              <label for="email"><b>Email</b></label>
              <input type="email" pattern ="[a-z0-9._%+\-]+@ashesi\.edu\.gh$" placeholder="Enter Email" name="email" id="email" required>  <br> <br>
          
              <!--Password--> 
              <label for="password"><b>Password</b></label>
              <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Enter Password" name="password" id="password" required>  <br> <br>
          
              <button type="submit" class="loginbtn" name ="loginbtn">Log-in</button> <br> <br>
            </div>
          </form>
    </body>
</html>