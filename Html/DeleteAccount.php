<?php 

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
    <!-- Web site navigation bar -->
    <header>
      <ul id="Nav-bar">
        <img src="../images/Logo/final.png" id="logo" />
        <a href="#" class="Nav-button"><li>Login</li></a>
        <a href="#" class="Nav-button"><li>About</li></a>
        <a href="#" class="Nav-button"><li>Home</li></a>
        <!-- <a href="#" class="Nav-button"><li>Genre</li></a> -->
        <!-- <a href="#" class="Nav-button"><li>Contact</li></a> -->
        <hr id="line" />
      </ul>
    </header>

    <div class="content">
      <div class="overley">
        <!-- <div id="btn"></div> -->

        <button type="button" class="ForgetPassword" id="ForgetPassword">
          Forget Password
        </button>
      </div>
      <div class="Forget-password">
        <form
          action="Forget.php"
          method="post"
          class="Forget-Password-form"
          id="ForgetPassword"
        >
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
    <script src="../Js/UserController.js"></script>
  </body>
</html>
