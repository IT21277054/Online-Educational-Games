<html>
    <head>
        <title>Last 10 Results</title>
    </head>
    <body>
        <table class="leaderboard">
        <thead>
            <tr>
                <td>ClientID</td>
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

            $sql = "SELECT  ClientID, HighScore, GameID FROM score";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["ClientID"]. "</td><td>" . $row["HighScore"] . "</td><td>"
            . $row["GameID"]. "</td></tr>";
            }
            echo "</table>";
            } else { echo "The table is empty"; }
            $conn->close();
            ?>

            </tbody>
            </table>
    </body>
</html>