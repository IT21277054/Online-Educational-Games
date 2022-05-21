<html>
    <head>
    <link rel="stylesheet" href="../Styles/leaderboard.css">
    <link rel="stylesheet" href="../Styles/Styles.css">
        <title>Last 10 Results</title>
    </head>
    <body>

      
        <video autoplay muted loop class="bgvideo">
            <source src="../Videos/Bg vid.mp4" type=video/ogg>
        </video>

        <!-- Web site navigation bar -->
        <header>
            <ul id="Nav-bar-id" class="Nav-bar">
                <img src="../images\Logo\final.png" id="logo">
                <a href="../Html/Contact.html" class="Nav-button"><li>Contact</li></a>
                <a href="../Html/Friends.html" class="Nav-button"><li>Friends</li></a>
                <a href="../Html/About.html" class="Nav-button"><li>About</li></a>
                <a href="Games.php" class="Nav-button"><li>Games</li></a>
                <a href="Index.php" class="Nav-button"><li>Home</li></a>
            </ul>
        </header>

        <img src="../images/ee6eaaacb8ff71935e277595408a3e11.gif" class = "fpage">
        <div class="title">Leaderboard</div>
        <div class="content">

        <center>
        <table class="leaderboard">
        <thead>
            <tr>
                <td>Gamer Tag</td>
                <td>HighScore</td>
                <td>GameID</td>
            </tr>
        </thead>
        <tbody>
        <?php
            $serverName = "localhost";
            $username ="root";
            $password ="";
            $dbName = "pixxel";
        
            $conn = mysqli_connect($serverName, $username, $password, $dbName);
        
            if($conn-> connect_error){
                echo "<script>('Connection error')</script>";
                die('');
            }

            $sql = "SELECT  GamerTag, HighScore, GameID FROM score s,client c WHERE c.ClientID = s.ClientID ORDER BY HighScore DESC";
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
        </center>
        </div>

        <footer>
        <img src="../images/Logo/Facebook.png" class="flogo">
        <img src="../images/Logo/Instergram.png" class="flogo">
        <img src="../images/Logo/Twitter.png" class="flogo">
        </footer>


        <script src="../Js/Main.js"></script>
    </body>
</html>