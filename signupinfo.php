<?php
  include('connection.php');
  if(isset($_POST['signup'])){
    $username = $_POST['username'];
    $user_id = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirm_password'];
  
    if (empty($username) || empty($user_id) || empty($password) || empty($cpassword)) {
        echo "All fields are required.";
        exit;
    }

    if ($password !== $cpassword) {
        echo "Passwords do not match.";
        exit;
    }
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

 $sql = "INSERT INTO login (username, userid, password)VALUES(?,?,?)";
 $stmt = $conn->prepare($sql);
 if ($stmt === false) {
     die("Prepare failed: " . $conn->error);
 }

 // Bind parameters
 $stmt->bind_param("sss", $username, $user_id, $hashed_password);

 // Execute the query
 if ($stmt->execute()) {
    //  echo "New record created successfully.";
    header('location:main.php');
 } else {
     echo "Error: " . $stmt->error;
 }

 // Close the statement
 $stmt->close();
}

// Close the database connection
$conn->close();



  
?>