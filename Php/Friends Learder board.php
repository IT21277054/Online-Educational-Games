<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" type="favicon" href="../Images/favicon.png" />
        <title>Friend leader border</title>
        <link rel="stylesheet" href="../Styles/Friends Learder board.css">
        <link rel="stylesheet" href="../Styles/Styles.css">
        
        <style>
         
        </style>
    </head>
    <body>
     
        
        <video 
              autoplay muted loop class="FCvideo"> 
            <source  src="../Videos/FC.mp4" type=video/ogg>
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
        
      <div class="content"></div>
        <h1> <div class="Topic2"> Friends <br> Leader board </div> </h1> 

 
        <div>
            <button class="btn2">Check Public Leaderboard</button>
            </div>
   
            <div class="Topic3"> Game One</div>
        <div>
            

        <table class="table">
            <thead>
                <tr>
                    <td>Gamer Tag</td>
                    <td>HighScore</td>
                    <td>GameID</td>
                </tr>
            </thead>
            <tbody>
            <?php
            // include db connection
            include './dbConnection.php';
    
            // start session
                session_start();
                $email = $_SESSION['email'];
    
                $sql = "SELECT friend.FriendID FROM friend LEFT JOIN score on score.ClientID = friend.FriendID";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {

                $friendID = $row['FriendID'];
                $HighScore = "SELECT * FROM score WHERE ClientID = $friendID";
                $result2 = $conn->query($HighScore);
                $row2 = $result2->fetch_assoc();

                $GameName = "SELECT GameName FROM game WHERE GameID = " . $row2['GameID'];
                $result3 = $conn->query($GameName);
                $row3 = $result3->fetch_assoc();

                $GameTag = "SELECT * FROM client WHERE ClientID = $friendID";
                $result4 = $conn->query($GameTag);
                $row4 = $result4->fetch_assoc();


               echo "<tr><td>" . $row4['GamerTag']. "</td><td>" . $row2['HighScore'] . "</td><td>" . $row3['GameName'] . "</td>";
                }
                echo "</table>";
                } else { echo "The table is empty"; }
                $conn->close();
                ?>
    
                </tbody>
                </table>
             </div> 
            </body>
</html>