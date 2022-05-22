<?php
include "./dbConnection.php";
session_start();
$email = $_SESSION['email'];
$clientID = $_SESSION['clientID'];

$gTag = "";

if(isset($_POST['search'])){

    $gTag = $_POST['gTag'];
    
    $sql = "SELECT * from client  where GamerTag = '$gTag';";
    $result = mysqli_query($conn , $sql);
    $row = mysqli_fetch_array($result);
    $Name = $row['FirstName'].' '.$row['LastName'];
    // $gTag = $row['GamerTag'];
}



?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add Friend</title>
        <link rel="stylesheet" href="../Styles/AddFriend.css">
        <link rel="stylesheet" href="../Styles/Styles.css">
    </head>

    <body>
  
    
    <video width ="320" height="240" autoplay muted loop class ="bgvideo">
    <source src="../images/YellowBlue.mp4" type ="video/mp4"> 
</video>
 
  <header>
    <ul id="Nav-bar-id" class="Nav-bar">
      <img src="../images/Logo/final.png" id="logo" />
      <a href="Logout.php" class="VNav-button"><li>Logout</li></a>
      <a href="MyAccount.php" class="VNav-button"><li>My Account</li></a>
      <a href="Contact.html" class="VNav-button"><li>Contact</li></a>
          <a href="Friends.html" class="VNav-button"><li>Friends</li></a>
          <a href="About.html" class="VNav-button"><li>About</li></a>
          <a href="Games.php" class="VNav-button"><li>Games</li></a>
          <a href="index.php" class="VNav-button"><li>Home</li></a>
    </ul>
  </header>
        

  
  <!-- Title -->


  <video width ="100%" height="100%" autoplay muted loop class ="playVideo">
    <source src="../images/minion2.mp4" type ="video/mp4"> 
</video>

<div class="Rtitle">Add Friend</div>


<!-- Content -->
<div class="Rcontent">

<fieldset class="field">
        <legend>Add Friend</legend>

    <form action="./AddFriend.php" method="POST">
        
        <input type="text" id = "reviewSubject" name = "gTag" placeholder ="Friend's Gamer Tag" value="<?php echo $gTag ;?>" >
        <button type="submit" name="search" class="AddFriendButton" id="sFriends" >Search Friend</button>

        <?php

        echo "
        <div class='friendDetails'>
        <div class='topic'><h5>".$Name."</h5> 
        <h5>".$gTag."</h5></div>
           

    </div>"; ?>
        </div>

 
    <!-- Review button -->

    <div class = "Button">

        <button type = "submit" name="submit" class="AddFriendButton">Search Friend</button>

    </div>

    </form>

    </fieldset>


   
    

</div>




<!-- Footer -->
<footer>
    <img src="..\images/Logo/Facebook.png" class = "flogo">
    <img src="..\images/Logo/Instergram.png" class="flogo">
    <img src="..\images/Logo/Twitter.png" class="flogo">
</footer>


<script src="../Js/MyReviewHistory.js"></script>

    </body>
</html>