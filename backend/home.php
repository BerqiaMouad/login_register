<?php 
   session_start();

   include("backend/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
   
   $id = $_SESSION['id'];
   $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

   while($result = mysqli_fetch_assoc($query)){
      $res_Uname = $result['Username'];
      $res_Email = $result['Email'];
      $res_Age = $result['Age'];
   }
?>