<?php
session_start(); 
  include('connection.php');
  if(isset($_POST['login'])){
   $user_id = $_POST['user_id'];
   $password = $_POST['password'];

   $query = "SELECT * from login where userid ='$user_id' && password='$password' ";
  $data= mysqli_query($conn,$query);
   $total=mysqli_num_rows($data);
   if($total > 0){
   header('location:newpage.php');
} else {
    $_SESSION['error_message'] = 'Invalid credentials';
    header('Location: main.php');
    exit;
}
  }

?>