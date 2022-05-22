<?php 
include "./dbConnection.php";

if(isset($_POST['submit'])){
  
  $email = $_POST['email'];
  $vCode = $_POST['code'];
  $pw = md5($_POST['password']);
  $conPw = md5($_POST['cPassword']);

  if($vCode == 12345 ){
    if($pw == $conPw){
      $sql = "SELECT * FROM client where Email='$email' ;";
        $result = mysqli_query($conn , $sql); // execute query

        // check result has a value or not if not execute this
        if (!$result -> num_rows > 0 ){
          echo "<script>alert('email not registered')</script>";
          
        }else {
          $sql = "UPDATE client SET ClientPassword='$pw' where Email='$email' ;";
          $result = mysqli_query($conn , $sql);
          header("Location: ../Html/SignUp.html");
        }
    }else{ 
      echo "<script>alert('password not match')</script>";
    }
  }else {
    echo "<script>alert('Invalid verification code')</script>";
  }


}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../Styles/ForgetPassword.css" />
    <meta charset="UTF-8" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" type="favicon" href="../Images/favicon.png" />
    <title>Forget Password</title>
  </head>
  <body>
     <video autoplay muted loop class="bgmvideo">
      <source src="../Videos/BG_signup.mp4" type=video/ogg>
    </video>
    <!-- Web site navigation bar -->
    <header>
      <ul id='Nav-bar-id' class='Nav-bar'>
        <img src='../images/Logo/final.png' id='logo' />
        <a href='../Html/SignUp.html' class='Nav-button'><li>Login</li></a>
        <a href='../Html/Contact.html' class='Nav-button'><li>Contact</li></a>
        <a href='../Html/About.html' class='Nav-button'><li>About</li></a>
        <a href='Games.php' class='Nav-button'><li>Games</li></a>
        <a href='index.php' class='Nav-button'><li>Home</li></a>
      </ul>
    </header>

    <div class="content">
      <div class="overley">
        <!-- <div id="btn"></div> -->

        <button type="button" class="ForgetPassword" name="submit" id="ForgetPassword">
          Forget Password
        </button>
      </div>
      <div class="Forget-password">
        <form
          action=""
          method="post"
          class="Forget-Password-form"
          id="ForgetPassword"
        >
        <input
            type="email"
            name="email"
            placeholder="Email"
            required
          />
          <input
            type="text"
            name="code"
            placeholder="Verification Code"
            required
          />
          <br />
          <input
            type="password"
            name="password"
            placeholder="New Password "
            required
          />
          <br />

          <input
            type="password"
            name="cPassword"
            placeholder="Confirm Password"
            required
          />
          <br />
          <br />
          <br />
          <br />
          <br />
          <button type="submit" name="submit" class="submit">Change Password</button>
        </form>
      </div>
    </div>

    <footer>
      <img src="../images/Logo/Facebook.png" class="flogo" />
      <img src="../images/Logo/Instergram.png" class="flogo" />
      <img src="../images/Logo/Twitter.png" class="flogo" />
    </footer>
    <script src="../Js/UserController.js"></script>
    <script src="../Js/Main.js"></script>
  </body>
</html>
