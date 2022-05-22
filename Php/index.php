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


  <video width ="320" height="240" autoplay muted loop class ="bgvideo">
    <source src="../images/MainBack.mp4" type ="video/mp4"> 
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



    <!-- <img src="../images/Cover Photo 2.png" class="fpage" /> -->


    <video width ="100%" height="100%" autoplay muted loop class ="bgffvideo">
    <source src="../images/MainBackground.mp4" type ="video/mp4"> 
</video>
    
    <div class="Rtitle">Hello<br /> <?php echo $name; ?>  </div>
    <div class="content">

    <fieldset class="field">
        <legend>New Arivals</legend> 


    <center>

    <div class="slider">
      <div class="info"></div>
      <div class="slides">
        <input type="radio" name="radio-btn" id="radio1" />
        <input type="radio" name="radio-btn" id="radio2" />
        <input type="radio" name="radio-btn" id="radio3" />
        <input type="radio" name="radio-btn" id="radio4" />

        <div class="slide first">
          <img src="../images/S1.jpg" alt="" />
          <div id="txt" class="txt-container1">
            <h2 id="topic">Sonic Fast Math</h2>
            <p id="content">Help Sonic Defeat the Enemies by Solving the Puzzles</p>
          </div>
        </div>
        <div class="slide">
          <div id="txt-container"></div>
          <img src="../images/S2.jpg" alt="" />
          <div id="txt" class="txt-container2">
            <h2 id="topic">Mario Spell Cature</h2>
            <p id="content">Math is'nt Mario's Strong Suit, Are you ready to help him?</p>
          </div>
        </div>
        <div class="slide">
          <div id="txt-container"></div>
          <img src="../images/S3.jpg" alt="" />
          <div id="txt" class="txt-container3">
            <h2 id="topic">Kirby's World Map</h2>
            <p id="content">Hena 3k gahanda one</p>
          </div>
        </div>
        <div class="slide">
          <div id="txt-container"></div>
          <img src="../images/S4.jpg" alt="" />
          <div id="txt" class="txt-container4">
            <h2 id="topic">Pikachu's Missing Friends</h2>
            <p id="content">Hena 4k gahanda one</p>
          </div>
        </div>

        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
      </div>

      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>
    </div>

</center>



</fieldset>


          <fieldset class="field">
                  <legend>Who are with</legend>
                  <img src="../images/Sega.png" class = "Sega">
                

                <fieldset class="field2">
                <h1>SEGA</h1>
                <p>fsjgyyyyyyyyyyyyyyyyyyhddddhjdsghdghdhhdd
                  fsdddddddffffffffffffffffffffffffffffffffffff
                  ghhhhhhhhhhhhhhhhhhhhhkkkkkkkkkkkkkkkkkkkkkkk
                  hffffffffffffffffffffffffffffffffffffffffffhf
                </p>
</fieldset>
          </fieldset>        

</div>

<!-- Footer -->
<footer>
    <img src="..\images/Logo/Facebook.png" class = "flogo">
    <img src="..\images/Logo/Instergram.png" class="flogo">
    <img src="..\images/Logo/Twitter.png" class="flogo">
</footer>



    <script type="text/javascript" src="../Js/index.js"></script>
  </body>
</html>
