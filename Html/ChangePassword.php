<?php
 include '../Php/dbConnection.php';
  session_start();

  if(isset($_POST['submit'])){

  $email = $_SESSION['email'];
  $password = $_POST['Current-Password'];
  $newPassword = md5($_POST['New-Password']);
  $conPassword = md5($_POST['Confirm-Password']);

  if($newPassword == $conPassword){
  $sql = "SELECT * FROM client where Email='$email' AND ClientPassword='$password'"; 
  $result = mysqli_query($conn , $sql); // execute the query 

    if($result -> num_rows > 0) { // check the query result returned something
        $sql = "UPDATE client SET ClientPassword='$newPassword' where Email='$email' ;"; 
        $_SESSION['email'] = $row['Email']; // 
        header("Location: ../Html/index.php"); // if mail and password are match logged the user
    }
    else{
        echo"<script type='text/javascript'>alert('Invalid Credentials');  history.go(-1);</script>";
    }
  }}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../Styles/ChangePassword.css" />
    <meta charset="UTF-8" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap"
      rel="stylesheet"
    />

    <link rel="icon" type="favicon" href="../Images/favicon.png" />

    <title>Change Password</title>
  </head>
  <body>
    <video autoplay muted loop class="bgmvideo">
      <source src="../Videos/BG_signup.mp4" type=video/ogg>
    </video>
    <!-- Web site navigation bar -->
    <header>
      <ul id="Nav-bar-id" class="Nav-bar">
        <img src="../images/Logo/final.png" id="logo" />
        <a href="Logout.php" class="Nav-button"><li>Logout</li></a>
        <a href="MyAccount.php" class="Nav-button"><li>My Account</li></a>
        <a href="Contact.html" class="Nav-button"><li>Contact</li></a>
            <a href="Friends.html" class="Nav-button"><li>Friends</li></a>
            <a href="About.html" class="Nav-button"><li>About</li></a>
            <a href="Games.php" class="Nav-button"><li>Games</li></a>
            <a href="index.php" class="Nav-button"><li>Home</li></a>
      </ul>
    </header>

    <div class="content">
      <div class="overley">
        <!-- <div id="btn"></div> -->

        <button type="button" class="ChangePassword" id="ChangePassword">
          Change Password
        </button>
      </div>
      <div class="Change-password">
        <form
          action=""
          method="post"
          class="Change-Password-form"
          id="changePassword"
        >
          <input
            type="text"
            name="Current-Password"
            placeholder="Current Password"
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
            name="password"
            placeholder="Confirm Password"
            required
          />
          <br />
          <br />
          <br />
          <br />
          <br />
          <button type="submit" class="submit">Change Password</button>
        </form>
      </div>
    </div>

    <footer>
      <img src="../images/Logo/Facebook.png" class="flogo" />
      <img src="../images/Logo/Instergram.png" class="flogo" />
      <img src="../images/Logo/Twitter.png" class="flogo" />
    </footer>
    <script src="../Js/Main.js"></script>
    <script src="../Js/UserController.js"></script>
  </body>
</html>
