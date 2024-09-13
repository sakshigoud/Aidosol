<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container my-5">
     <h1>Login Form</h1>
    
    <form id="loginform" action="login.php" method="post" onsubmit="return validateForm()"> 
        <div class="mb-3">
          <label for="email" class="form-label">User id</label>
          <input type="email" name="user_id" placeholder="Enter your user id" class="form-control" id="email">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password"  placeholder="Enter your password" class="form-control" id="password" >
        </div>
        <p id="error-message" class="error"></p>

           <?php
                session_start(); 
                if (isset($_SESSION['error_message'])) {
                    echo $_SESSION['error_message'];
                    unset($_SESSION['error_message']);
                }
             ?>

      
  <input type="submit" name="login" value="login" class="btn btn-primary">
  <a href="signup.php" class="btn btn-primary">Signup</a>

    </form>
    </div>
  <script>
      function validateForm() {
      var email = document.getElementById("email").value;
      var password = document.getElementById("password").value;
      var errorMessage = document.getElementById("error-message");

      if (email === "" || password === "") {
        errorMessage.textContent = "Both email and password are required.";
        return false;  
      }
      window.location.href = "newpage.html"; 
      return true;
    }
  </script>
</body>
</html>


