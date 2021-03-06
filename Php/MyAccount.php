<?php

  include './dbConnection.php';
  session_start();
  $email = $_SESSION['email'];

  $sql = "SELECT * FROM client where email = '$email'";
  $result = mysqli_query($conn , $sql);

  $row = mysqli_fetch_assoc($result); // take result as a associate array

  $fName = $row['FirstName'];
  $lName = $row['LastName']; 
  $gTag = $row['GamerTag'];
  $cType = $row['ClientType'];
  $cImage = $row['UserImage'];
 
  // $conn -> close();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../Styles/MyAccount.css" />
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
    <br />
    <br />
    <br /><br />
    <div class="content">
      <br />
      <button class="btnDelete" onclick="window.location.href='DeleteAccount.php';">Delete Account</button>
      <div class="img">
        <img id="img" src="../Images/User Images/<?php echo $cImage; ?>" />
      </div>
      <div class="info">
        <label for="">First Name</label><br />
        <input name="fName" readonly value="<?php echo $fName; ?>"/>
        <br />
        <label for="">Last Name</label><br />
        <input name="lName" readonly value="<?php echo $lName; ?>" />
        <br />
        <label for="">Gamer Tag</label><br />
        <input name="gTag" readonly value="<?php echo $gTag; ?>" />
        <br />
        <label for="">Email</label><br />
        <input name="email" readonly value="<?php echo $email; ?>" />
        <br />
        <label for="">Account Type</label><br />
        <input name="cType" readonly value="<?php echo $cType; ?>" />
        <br />
        <button class="btnChangePw" onclick="window.location.href='ChangePassword.php';">Change Password</button>
        <button class="btnEdit" onclick="window.location.href='MyAccountEdit.php';">Edit</button>
      </div>
      <div class="buttons">
        <label id="btnlabel"><h3>Links</h3></label>
        <button class="btnReview" onclick="window.location.href='MyReviewHistory.php';" >My review</button>
        <button class="btnGame" onclick="window.location.href='MyGames.php';">My Game</button>
        <button class="btnFriends" onclick="window.location.href='MyFriends.php';">My Friends</button>
        <button class="btnLeaderboard" onclick="window.location.href='PayHistory.php';" >Order History</button>
        <button class="btnOrder" onclick="window.location.href='Feedback.php';" >Give Feedback</button>
      </div>
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
