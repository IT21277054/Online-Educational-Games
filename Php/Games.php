<?php

session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../Styles/Styles.css">
    <link rel="stylesheet" href="../Styles/Games.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    
    <link rel="icon" type="favicon" href="../Images/favicon.png" />
    <title>Pixxel</title>
</head>
<body>
    
    <video autoplay muted loop class="bgvideo">
        <source src="../Videos/Bg vid.mp4" type=video/ogg>
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

    <img src="../images/92afb472197119.5c4f3970ade13.gif" class = "fpage">
    <div class="title">GAMES</div>
    <div class="content">
        
        <div class="gamebox">
            <div class="Gamecontent"><div class="ptitle">Sonic Math Runner</div><br>Help Sonic Defeat The Enemies by Solving the Puzzles </div>
            <img src="../images/sonic-png-14.png" class = "titlecard2">
            <a href="SonicLockScreen.php"><button type="button" class="playnow">Play Now</button></a>
            <a href="./AddReview.php?gID=1000"><button type="button1" class="trynow">Reviews</button></a>
            <img src="../images/blank welcome.png" class = "titlecard" >
        </div>
        <br><br><br><br><br><br>
        <div class="gamebox2">
            <div class="Gamecontent"><div class="ptitle">Mario Spell Catcher</div><br>Math is'nt Mario's Strong Suit, Are you Ready to Help Him</div>
            <img src="../images/Mario.png" class = "titlecard2">
            <a href="MarioLockScreen.php"><button type="button" class="playnow">Play Now</button></a>
            <a href="./AddReview.php?gID=1001"><button type="button1" class="trynow">Reviews</button></a>
            <img src="../images/blank welcome.png" class = "titlecard" >
        </div>
        <br><br><br><br><br><br><br>
        <div class="gamebox3">
            <div class="Gamecontent"><div class="ptitle">Pokemon : Coming Soon</div><br>Pre Order Will Be Available Soon Stay Tuned</div>
            <img src="../images/Charizard.png" class = "titlecard2">
            <button type="button" class="playnow">Pre Order</button>
            <img src="../images/blank welcome.png" class = "titlecard" >
        </div>
        <br><br><br><br><br><br><br>
        <div class="gamebox4">
            <div class="Gamecontent"><div class="ptitle">Street Fighter : Coming Soon</div><br>Pre Order Will Be Available Soon Stay Tuned</div>
            <img src="../images/StreetFighter.png" class = "titlecard2">
            <button type="button" class="playnow">Pre Order</button>
            <img src="../images/blank welcome.png" class = "titlecard" >
        </div>
        <br><br><br><br><br><br><br>
        <div class="gamebox5">
            <div class="Gamecontent"><div class="ptitle">Kirby : Coming Soon</div><br>Pre Order Will Be Available Soon Stay Tuned</div>
            <img src="../images/Kirby.png" class = "titlecard2">
            <button type="button" class="playnow">Pre Order</button>
            <img src="../images/blank welcome.png" class = "titlecard" >
        </div>
        
    </div>

    <footer>
        <img src="../images/Logo/Facebook.png" class="flogo">
        <img src="../images/Logo/Instergram.png" class="flogo">
        <img src="../images/Logo/Twitter.png" class="flogo">
    </footer>


    <script src="../Js/Main.js"></script>

</body>
</html>