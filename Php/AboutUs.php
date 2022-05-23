
<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../Styles/Styles.css">
    <link rel="stylesheet" href="../Styles/AboutUs.css">
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
    <!-- onscroll="camealongway()" -->
    <!-- Web site navigation bar -->
    <?php

    if(isset($_SESSION['email'])){
      echo "<header>
      <ul id='Nav-bar-id' class='Nav-bar'>
        
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
        
    
  </header>
  <center>
    <img src="../Images/Logo/final.png" class = "fpage">
    <div class="title"></div>
    <div class="content">
    <br><br>
    <div class="container">
      <img src="../Images/Uma.jpeg" alt="Avatar" class="image">
      <div class="overlay">
        <div class="text">Umayangana Wijayasiri</div>
      </div>
    </div>
    <br><br>
    <div class="container">
      <img src="../Images/Shamry.jpeg" alt="Avatar" class="image">
      <div class="overlay">
        <div class="text">Vishwa Gurusinghe</div>
      </div>
    </div>
    <br><br>
    <div class="container">
      <img src="../Images/Vih.jpeg" alt="Avatar" class="image">
      <div class="overlay">
        <div class="text">Hello World</div>
      </div>
    </div>
    <br><br>
    <div class="container">
      <img src="../Images/Sudheera.jpeg" alt="Avatar" class="image">
      <div class="overlay">
        <div class="text">Hello World</div>
      </div>
    </div>
    <br><br>
    <div class="container">
      <img src="../Images/Vishwa.jpeg" alt="Avatar" class="image">
      <div class="overlay">
        <div class="text">Hello World</div>
      </div>
    </div>
    <!-- <center>
        <img src="../Images/Uma.jpeg">
        <img src="../Images/Shamry.jpeg">
        <img src="../Images/Vih.jpeg">
        <img src="../Images/Sudheera.jpeg">
        <img src="../Images/Vishwa.jpeg">
  </center> -->
    </div>
</center>

    <footer>
        <img  src="../Images/Logo/Facebook.png" class="flogo">
        <img  src="../Images/Logo/Instergram.png" class="flogo">
        <img  src="../Images/Logo/Twitter.png" class="flogo">
    </footer>

    <script src="../Js/Main.js"></script>

</body>
</html>