<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../Styles/Gamecode.css">
    <link rel="stylesheet" href="../Styles/Styles.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="favicon" href="../Images/favicon.png" />
    <title>Change GamerTag</title>

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


</head>

<body>

    <video autoplay muted loop class="bgvideo">
        <source src="../Videos/Bg vid.mp4" type=video/ogg>
    </video>

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
        
    <img src="../images/Change.gif" class = "fpage">
    <div class="gtitle">Welcome<br>
    <?php
        // include db connection
        include './dbConnection.php';

        // start session
        session_start();
        $email = $_SESSION['email'];


        $sql = "SELECT GamerTag FROM client WHERE Email ='$email'";
        $result = mysqli_query($conn,$sql);
        // echo "$result";

        while($rowData = mysqli_fetch_array($result)){
            echo $rowData["GamerTag"].'<br>';
        }

    ?>
    </div>
    <div class="content">
        <center>
        <form action="ChangeGamerTag.php" method="post">
            <label for="gtag" class="gttitle">Change Gamer Tag</label><br><br>
            <input type="text" name="gtag" class="gttxt"><br><br>
            <button type="submit" class="gtsub">Change</button>
        </form>
        </center>
    </div>

    <footer>
        <img  src="../images/Logo/Facebook.png" class="flogo">
        <img  src="../images/Logo/Instergram.png" class="flogo">
        <img  src="../images/Logo/Twitter.png" class="flogo">
    </footer>

    <script src="../Js/Main.js"></script>



</body>

</html>