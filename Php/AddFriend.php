<?php
include "./dbConnection.php";
session_start();
$email = $_SESSION['email'];
$clientID = $_SESSION['clientID'];

$gTag = "";
$Name = "";
$friendID = "";
$bool ="";
$value = "Add Friend";

if(isset($_POST['search'])){

    $gTag = $_POST['gTag'];
    if(!empty($gTag)){

        
        $sql = "SELECT * from client  where GamerTag = '$gTag';";
        $result = mysqli_query($conn , $sql);
        $row = mysqli_fetch_array($result);
        $Name = $row['FirstName'].' '.$row['LastName'];
        $friendID = $row['ClientID'];

        

        $sql3 = "SELECT * FROM friend where clientID = '$clientID' AND friendID = '$friendID'";
        $result3 = mysqli_query($conn , $sql3);
        if($result3 -> num_rows > 0){
            $value = "Already added";
            $bool = "disabled";
            echo"<script>alert('already added')</script>";
        }else{ 
            $value = "Add Friend";
            $bool ="";
        }
          
        // $gTag = $row['GamerTag'];
    }
}

if(isset($_POST['addSubmit'])){

    $friendID = $_POST['fID'];

    $sql2 = "INSERT INTO friend(friendID,ClientID) VALUES ($friendID,$clientID)";
    if( mysqli_query($conn , $sql2)){
        echo "<script>alert('You have successfully added ".$gTag."')</script>";
        header("Location: ./MyFriends.php");
    }
}



?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" type="favicon" href="../Images/favicon.png" />
        <title>Add Friend</title>
        <link rel="stylesheet" href="../Styles/AddFriend.css">
        <link rel="stylesheet" href="../Styles/Styles.css">
    </head>

    <body>
  
    
    <video width ="320" height="240" autoplay muted loop class ="bgvideo">
    <source src="../images/YellowBlue.mp4" type ="video/mp4"> 
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
         <input type='hidden' name='fID' value='".$friendID."' style='display:none'>  

    </div>"; ?>
        </div>

 
    <!-- Review button -->
    <?php 
    if(!empty($Name)){
        echo"

        <div class = 'Button'>
            
            <button type = 'submit' name='addSubmit' class='AddFriendButton' ".$bool."  >".$value."</button>
            
        </div>
    ";}?>

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