<!DOCTYPE html>
<html> 
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport", content = "width = device-width,initial-scale = 1.0">
    <title> StudentServe Volunteering Platform </title>
    </head>
    <body>
        <form action="../Organization/Organization_Login_Action.php" method="post" name ="login" id = "login">
            <div class="container">
              <h1>Orgaization Login</h1>
              <p>Please fill in this form to log in.</p>
              <hr>
              <!--Organization Name-->
              <label for="organizationName">Organization name:</label><br>
              <input type="text" pattern = "[A-Za-z \-'']{2,}$"  id="organizationName" name="organizationName"placeholder="Enter your organization name" required> <br> <br>
              <!--Email--> 
              <label for="email"><b>Email</b></label>
              <input type="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" placeholder="Enter Email" name="email" id="email" required>  <br> <br>
          
              <!--Password--> 
              <label for="password"><b>Password</b></label>
              <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Enter Password" name="password" id="password" required>  <br> <br>
          
              <button type="submit" class="loginbtn" name ="loginbtn">Log-in</button> <br> <br>
            </div>
            
          </form>

    <!-- Javascript Validation. Got assistance from w3schools -->

    <script>
        function validateLoginForm() 
        {
            var orgName = document.getElementById('organizationName').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;

            if (orgName === '' || email === '' || password === '') {
                alert('Please fill in all fields.');
                return false;
            }

            return true; 
        }
    </script>
    </body>
</html>