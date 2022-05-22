<?php

session_start();
$email = $_SESSION['email'];

if(isset($_POST['submit'])){

    $friendGamerTag = $_POST['FriendName'];
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../Styles/MyFriends.css">
    <link rel="stylesheet" href="../Styles/Styles.css">

    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="shortcut icon" href="../images/2323134-middle.png/">
    <link rel="preconnect" href="https://fonts.gstatic.com">
   


    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:ital,wght@0,100;0,200;" -->

    <title>Contact Us</title>
</head>

<body>
    <!--Navigation bar-->



<!-- Background -->

<video width ="320" height="240" autoplay muted loop class ="bgvideo">
    <source src="../images/ContactVideo.mp4" type ="video/mp4"> 
</video>


    <!--Navigation bar-->

<header>
    <ul id="Nav-bar-id" class="Nav-bar">
        <img src="..\images\Logo\final.png" id="logo">
        <a href="Contact.html" class="VNav-button"><li>Contact</li></a>
        <a href="Genre.html" class="VNav-button"><li>Genre</li></a>
        <a href="About.html" class="VNav-button"><li>About</li></a>
        <a href="Games.html" class="VNav-button"><li>Games</li></a>
        <a href="Index.html" class="VNav-button"><li>Home</li></a>

        </ul>
</header>

<!-- Title -->

<img src="../images/friends.gif" class = "Vfpage">

<div class="Vtitle">My Friends</div>

<?php

echo "
<form class='example' action='./MyFriends.php' method='post'>
<!-- Content -->

<div class='Vcontent'>

  <fieldset class ='Vfield'>
 <div class ='OneLine'>
 
    <button type='submit' name='toLeaderboard' class='toLeaderboard' readonly >Search Friends in Leaderboard</button>

    <div class = 'Button'>
         
    </div>
    </div>
   
    <div class ='OneLine2'>
    <input type='text' id = 'FriendName' name = 'FriendName' Value =''>
   <button type='submit' name='Remove' class='Remove'>Remove</button>
    
    </div><br><br>
    
    </fieldset>
      
      </div>
      
      </form>";
      ?>

</div>


<!-- Footer -->
<footer>
    <img src="..\images/Logo/Facebook.png" class = "flogo">
    <img src="..\images/Logo/Instergram.png" class="flogo">
    <img src="..\images/Logo/Twitter.png" class="flogo">
</footer>


<script src="../Js/Feedback.js"></script>

</body>
</html>