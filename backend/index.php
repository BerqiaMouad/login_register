<?php 
   session_start();
   include("backend/config.php");

   if(isset($_POST['submit'])){
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $password = mysqli_real_escape_string($con,$_POST['password']);

      $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
      $row = mysqli_fetch_assoc($result);

      if(is_array($row) && !empty($row)){
          $_SESSION['valid'] = $row['Email'];
          $_SESSION['username'] = $row['Username'];
          $_SESSION['age'] = $row['Age'];
          $_SESSION['id'] = $row['Id'];
          echo "valid";
      }else{
          echo "Wrong Username or Password";
      }
    //   if(isset($_SESSION['valid'])){
    //       header("Location: ../home.html");
    //   }
   }
?>
