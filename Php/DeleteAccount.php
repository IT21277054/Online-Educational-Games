<?php 

session_start();

include '../Php/dbConnection.php';

if(isset($_POST['submit'])){

  $email = $_SESSION['email'];
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM client where email='$email' and ClientPassword='$password'";

  $result = mysqli_query($conn ,$sql);

  if($result -> num_rows > 0 ){
    
    $sql = "DELETE FROM client where Email= '$email' AND ClientPassword= '$password'";
    if(mysqli_query($conn ,$sql)){
      echo "<script>alert('Account Deleted')</script>";
      session_destroy();
      header("Location: ../Php/index.php");
    }
    
    else {
      echo "<script>alert('Error Try again')</script>";
    }
  }
  else {
    echo "<script>alert('Wrong Password')</script>";
  }
}
$conn -> close();
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
    <title>Delete Account</title>
  </head>
  <body>
    <video autoplay muted loop class="bgmvideo">
      <source src="../Videos/BG_signup.mp4" type=video/ogg>
    </video>
    <!-- Web site navigation bar -->
    <?php

    if(isset($_SESSION['email'])){
      echo "<header>
      <ul id='Nav-bar-id' class='Nav-bar'>
        <img src='../images/Logo/final.png' id='logo' />
        <a href='Logout.php' class='Nav-button'><li>Logout</li></a>
        <a href='MyAccount.php' class='Nav-button'><li>My Account</li></a>
        <a href='ContactUs.php' class='Nav-button'><li>Contact</li></a>
        <a href='AddFriend.php' class='Nav-button'><li>Add Friends</li></a>
        <a href='AboutUs.php' class='Nav-button'><li>About</li></a>
        <a href='Games.php' class='Nav-button'><li>Games</li></a>
        <a href='index.php' class='Nav-button'><li>Home</li></a>
        <!-- <a href='' class='Nav-button'><li>Contact</li></a> -->
      </ul>
    </header>";

  } else { 
    echo"<header>
      <ul id='Nav-bar-id' class='Nav-bar'>
        <img src='../images/Logo/final.png' id='logo' />
        <a href='../Html/SignUp.html' class='Nav-button'><li>Login</li></a>
        <a href='ContactUs.php' class='Nav-button'><li>Contact</li></a>
        <a href='AboutUs.php' class='Nav-button'><li>About</li></a>
        <a href='Games.php' class='Nav-button'><li>Games</li></a>
        <a href='index.php' class='Nav-button'><li>Home</li></a>
      </ul>
    </header>";
  }

    ?>
    
  }

    ?>

    <div class="content">
      <div class="overley">
        <!-- <div id="btn"></div> -->

        <button type="button" class="ForgetPassword" id="ForgetPassword">
          Delete My Account
        </button>
      </div>
      <div class="Forget-password">
        <form
          action=""
          method="post"
          class="Forget-Password-form"
          id="ForgetPassword"
        >
          <label for="password" id="deleteLabel" ><p>If you want to delete your account Enter password and click confirm</p></label>
          <input
            type="password"
            name="password"
            placeholder="Type Password"
            id="password" 
            required
          />
          <br />
          <br />
          <br />
          <br />
          <br />
          <button type="submit" name="submit" class="submit">Confirm</button>
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
