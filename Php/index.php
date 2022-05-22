<?php
session_start();
$name = "Y'all";

include "./dbConnection.php";
if(isset($_SESSION['email'])){
$email = $_SESSION['email'];

$sql = "SELECT * FROM client where Email = '$email'"; // sql query to check if email exist in db

$result = mysqli_query($conn , $sql); // execute the query

if(!$result -> num_rows > 0){
    
}

else
{
    $row = mysqli_fetch_array($result);
    $name = $row['FirstName'];
    
   
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="../Styles/index.css" />
    <link rel="stylesheet" href="../Styles/Styles.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap"
      rel="stylesheet"
    />

    <title>Pixxel</title>
  </head>
  <body>
    <!-- onscroll="camealongway()" -->
    <!-- Web site navigation bar -->
    <?php

    if(isset($_SESSION['email'])){
      echo "<header>
      <ul id='Nav-bar-id' class='Nav-bar'>
        <img src='../images/Logo/final.png' id='logo' />
        <a href='Logout.php' class='Nav-button'><li>Logout</li></a>
        <a href='MyAccount.php' class='Nav-button'><li>My Account</li></a>
        <a href='../Html/Contact.html' class='Nav-button'><li>Contact</li></a>
            <a href='../Html/Friends.html' class='Nav-button'><li>Friends</li></a>
            <a href='../Html/About.html' class='Nav-button'><li>About</li></a>
            <a href='Games.php' class='Nav-button'><li>Games</li></a>
            <a href='index.php' class='Nav-button'><li>Home</li></a>
        <!-- <a href='../Html/ContactUs.Html' class='Nav-button'><li>Contact</li></a> -->
      </ul>
    </header>";
    
  } else { 
    echo"<header>
      <ul id='Nav-bar-id' class='Nav-bar'>
        <img src='../images/Logo/final.png' id='logo' />
        <a href='../Html/SignUp.html' class='Nav-button'><li>Login</li></a>
        <a href='../Html/Contact.html' class='Nav-button'><li>Contact</li></a>
        <a href='../Html/About.html' class='Nav-button'><li>About</li></a>
        <a href='Games.php' class='Nav-button'><li>Games</li></a>
        <a href='index.php' class='Nav-button'><li>Home</li></a>
      </ul>
    </header>";
  }

    ?>
    <img src="../images/Cover Photo 2.png" class="fpage" />
    <div class="title">Welcome<br /> <?php echo $name; ?>  </div>
    <div class="content">

 <!--image slider start-->
 <div class="slider">
      <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1" />
        <input type="radio" name="radio-btn" id="radio2" />
        <input type="radio" name="radio-btn" id="radio3" />
        <input type="radio" name="radio-btn" id="radio4" />
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
          <img src="../images/S1.jpg" alt="" />
        </div>
        <div class="slide">
          <img src="../images/S2.jpg" alt="" />
        </div>
        <div class="slide">
          <img src="../images/S3.jpg" alt="" />
        </div>
        <div class="slide">
          <img src="../images/S4.jpg" alt="" />
        </div>
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
        <!--automatic navigation end-->
      </div>
      <!--manual navigation start-->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>
      <!--manual navigation end-->
    </div>
    <!--image slider end-->

    <script type="text/javascript">
      var counter = 1;
      setInterval(function () {
        document.getElementById("radio" + counter).checked = true;
        counter++;
        if (counter > 4) {
          counter = 1;
        }
      }, 5000);
    </script>

    </div>

    <footer>
      <img src="../images/Logo/Facebook.png" class="flogo" />
      <img src="../images/Logo/Instergram.png" class="flogo" />
      <img src="../images/Logo/Twitter.png" class="flogo" />
    </footer>

    <script src="../Js/Main.js"></script>
  </body>
</html>
