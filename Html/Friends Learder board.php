<!DOCTYPE html>
<html lang="en">
    <head>
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
    <header>
        <ul id="Nav-bar-id" class="Nav-bar">
          <img src="../images/Logo/final.png" id="logo" />
          <a href="Logout.php" class="Nav-button"><li>Logout</li></a>
          <a href="MyAccount.php" class="Nav-button"><li>My Account</li></a>
          <a href="Contact.html" class="Nav-button"><li>Contact</li></a>
              <a href="Friends.html" class="Nav-button"><li>Friends</li></a>
              <a href="About.html" class="Nav-button"><li>About</li></a>
              <a href="Games.php" class="Nav-button"><li>Games</li></a>
              <a href="index.php" class="Nav-button"><li>Home</li></a>
        </ul>
      </header>

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
                $GameID = $_SESSION['GameID'];
    
                $sql = "SELECT  F.FriendID, S.HighScore FROM friend F,score S WHERE S.ClientID = F.ClientID AND  GameID ='$GameID' ORDER BY HighScore DESC";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["GamerTag"]. "</td><td>" . $row["HighScore"] . "</td><td>"
                . $row["GameID"]. "</td></tr>";
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