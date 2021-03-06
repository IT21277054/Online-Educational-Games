<?php 

session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="../Styles/MyGames.css">
    <link rel="stylesheet" href="../Styles/Styles.css">
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
    <title>My games</title>
</head>
<body>
    <video autoplay muted loop id="myVideo">
        <source src="../Images/GreenGradientBg.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    
    <!-- onscroll="camealongway()" -->
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

    <!-- <img src="../Images/Cover.jpg" class = "fpage"> -->
    <div class="heading">My<br>Games</div>
    <img src="../Images/child.gif" class="phgif" height="375px">
    <div class="phcontent">

    <center>
    
        <table boarder =1 >
        <thead> 
            <tr> 
                <td class="line" > Game name</td>   
                <td class="line" > Expire date</td> 
            </tr>
        <thead>

        <tbody>
        
        <?php
            include '../Php/dbConnection.php';

            $email = $_SESSION['email'];
            
            $sql2 = " SELECT ClientID as cID 
                     FROM client WHERE Email='$email';";

            $result2 = mysqli_query($conn , $sql2);
            $row = mysqli_fetch_array($result2);
                
            $cID = $row['cID']; 

            // $cID = $_SESSION['clientID'];

            if(isset($_POST['gID']))
            {
                $gID1 = $_POST['gID'];

                $sql = "DELETE FROM own WHERE GameID= $gID1 AND ClientID=$cID";

                $result = $conn->query($sql);
            }


            $sql = "SELECT game.GameName , own.Subscription , game.gameID FROM `own` LEFT JOIN game ON game.GameID = own.GameID WHERE `ClientID`=$cID AND `Subscription` >= DATE(NOW());";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["GameName"]. "</td><td>" . $row["Subscription"] . "</td>
            <td> <form method='post'><input name='gID' value=' ". $row[ "gameID" ] . "' style='display:none' > 
            <input type='submit' value= 'Unsubscribe' name='deletebtn' class='btn' > </form> </td></tr>";
            }

            } else { echo ""; }
            $conn->close();
            ?>
            </tbody>
        </table>
        
        <center>
            
            

    </div>

    <footer>
        <img  src="../Images/Logo/Facebook.png" class="flogo">
        <img  src="../Images/Logo/Instergram.png" class="flogo">
        <img  src="../Images/Logo/Twitter.png" class="flogo">
    </footer>

    <script src="../Js/Main.js"></script>

</body>
</html>