<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../Styles/MyAccountEdit.css" />
    <meta charset="UTF-8" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" type="favicon" href="../Images/favicon.png" />
    <title>My Account</title>
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
            <a href="Games.html" class="Nav-button"><li>Games</li></a>
            <a href="index.php" class="Nav-button"><li>Home</li></a>
      </ul>
    </header>
    <br />
    <br />
    <br /><br />
    <div class="content">
      <br />
      <form action="" method="post">
        <button class="btnDelete">Delete Account</button>
        <div class="img">
          <img src="../Images/User Images/default.png" />
          <input type="file" id="imgFile" name="imgFile" />
        </div>
        <div class="info" id="info">
          <label for="">First Name</label><br />
          <input name="fName" id="input" />
          <br />
          <label for="">Last Name</label><br />
          <input name="lName" id="input" />
          <br />
          <label for="">Gamertag</label><br />
          <input name="gTag" id="input" />
          <br />
          <label for="">Email</label><br />
          <input name="email" id="input" />
          <br />
          <label for="">Account Type</label><br />
          <input name="accType" id="input" readonly />
          <br />
          <button class="btnChangePw">Change Password</button>
          <button class="btnEdit">Save</button>
        </div>
      </form>
    </div>
    <br />
    <footer>
      <img src="../images/Logo/Facebook.png" class="flogo" />
      <img src="../images/Logo/Instergram.png" class="flogo" />
      <img src="../images/Logo/Twitter.png" class="flogo" />
    </footer>
    <script src="../Js/MyAccount.js"></script>
    <script src="../Js/Main.js"></script>
  </body>
</html>
