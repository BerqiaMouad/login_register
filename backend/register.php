<?php
include("backend/config.php");

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $password = $_POST['password'];

    //verifying the unique email
    $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

    if(mysqli_num_rows($verify_query) !=0 ){
        echo "<div class='message'>
                  <p>This email is used, Try another One Please!</p>
              </div> <br>";
        echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
    }
    else{
        mysqli_query($con,"INSERT INTO users(Username,Email,Age,Password) VALUES('$username','$email','$age','$password')") or die("Erroe Occured");

        echo "<div class='message'>
                  <p>Registration successfully!</p>
              </div> <br>";
        echo "<a href='index.php'><button class='btn'>Login Now</button>";
    }
}
?>