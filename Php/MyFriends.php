<?php
include "./dbConnection.php";
session_start();
$email = $_SESSION['email'];
$clientID = $_SESSION['clientID'];

$sql = "SELECT GamerTag from client left join friend on friend.FriendID = client.ClientID where friend.clientID = '$clientID';";
$result = mysqli_query($conn , $sql);

if(isset($_POST['Remove'])){

    $friendGamerTag = $_POST['gTag'];

    $sql2 = "delete Friend from Friend inner join client on friend.FriendID = client.ClientID where friend.clientID = $clientID and Client.GamerTag = '$friendGamerTag';";

    // echo $sql2;

    if(mysqli_query($conn , $sql2)){
        echo "<script>alert('Friend Deleted')</script>";
        
        
    }
    $sql = "SELECT GamerTag from client left join friend on friend.FriendID = client.ClientID where friend.clientID='$clientID'";
    $result = mysqli_query($conn , $sql);

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
   


   <link rel="icon" type="favicon" href="../Images/favicon.png" />
    <title>MyFriends</title>
</head>

<body>
    <!--Navigation bar-->



<!-- Background -->

<video width ="320" height="240" autoplay muted loop class ="bgvideo">
    <source src="../images/ContactVideo.mp4" type ="video/mp4"> 
</video>


    <!--Navigation bar-->

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
<!-- Title -->

<img src="../images/friends.gif" class = "Vfpage">

<div class="Vtitle">My Friends</div>

 
 <form class='example' action='./MyFriends.php' method='post'>
 <!-- Content -->

 <div class='Vcontent'>

  <fieldset class ='Vfield'>
 <div class ='OneLine'>
 
    <button type='submit' name='toLeaderboard' class='toLeaderboard' readonly ><a href="Friends Learder board.php">Search Friends in Leaderboard</a></button>

    <div class = 'Button'>
         
    </div>
    </div>
    <div >
   <?php
 while($row = mysqli_fetch_array($result)){
    $friendGamerTag = $row['GamerTag'];
 echo "
    <input type='text' id = 'FriendName' name = 'gTag' Value ='".$friendGamerTag."' readonly>
   <button type='submit' name='Remove' class='Remove'>Remove</button>
    

      </form> <br/><br>";}
      ?></div><br><br>
</fieldset>
      
      </div>
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