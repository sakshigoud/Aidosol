<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container my-5">
        <h1>Signup Form</h1>
    
        <form id="signupform" action="signupinfo.php" method="post" onsubmit="return validateForm()"> 
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" placeholder="Enter your username" class="form-control" id="username">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" placeholder="Enter your email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" placeholder="Enter your password" class="form-control" id="password">
            </div>
            <div class="mb-3">
                <label for="confirm-password" class="form-label">Confirm Password</label>
                <input type="password" name="confirm_password" placeholder="Confirm your password" class="form-control" id="confirm-password">
            </div>
            <p id="error-message" class="error"></p>

            <div class="button-container">
                <button type="submit" name="signup" class="btn btn-primary">Signup</button>
            </div>
        </form>
    </div>
    <script>
        function validateForm() {
            var username = document.getElementById("username").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirm-password").value;
            var errorMessage = document.getElementById("error-message");

            if (username === "" || email === "" || password === "" || confirmPassword === "") {
                alert("All fields are required.");
                return false;  
            }

            if (password !== confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            window.location.href = "main.php";
            return true;
        }
    </script>
</body>
</html>
