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
    <header>
    <ul id="Nav-bar-id" class="Nav-bar">
        <img src="../Images/Logo/final.png" id="logo">
        <a href="#" class="Nav-button"><li>Contact</li></a>
        <a href="#" class="Nav-button"><li>Genre</li></a>
        <a href="#" class="Nav-button"><li>About</li></a>
        <a href="" class="Nav-button"><li>Games</li></a>
        <a href="" class="Nav-button"><li>Home</li></a>
        <hr id="line" hidden>
    </ul>
        
    
</header>

    <!-- <img src="../Images/Cover.jpg" class = "fpage"> -->
    <div class="heading">My<br>Games</div>
    <img src="../Images/child.gif" class="phgif" height="375px">
    <div class="phcontent">

    <center>
        <table boarder =1 >
        <thead> 
            <tr> 
                <td class="line" > Game name</td>     
                <td class="line" > Subscription </td>                   
                <td class="line" > Expire date</td> 
            </tr>
        <thead>

        <tbody>
        
        <?php
            include '../Php/dbConnection.php';

            session_start();

            // $_SESSION['gameID']=1000;
            // $gameID = $_SESSION['gameID'];

            $_SESSION['email']= 'vihangi@gmail.com';
            $email = $_SESSION['email'];
            
            $sql2 = " SELECT ClientID as cID 
                    FROM client WHERE Email='$email';";

            $result2 = mysqli_query($conn , $sql2);
            $row = mysqli_fetch_array($result2);

            $cID = $row['cID']; 

            $sql = "    SELECT g.GameName , w.Subscription 
                        FROM orderitem o , game g , own w 
                        WHERE o.GameID=g.GameID AND o.GameID=w.GameID 
                            AND DATE_ADD( o.ODate , INTERVAL w.Subscription MONTH) > (SELECT CURDATE())
                            AND o.ClientID = $cID;";

            $expdate = " SELECT DATE_ADD( o.ODate , INTERVAL w.Subscription MONTH) AS expdate 
                        FROM orderitem o , own w WHERE o.GameID=w.GameID 
                            AND DATE_ADD( o.ODate , INTERVAL w.Subscription MONTH) > (SELECT CURDATE())
                            AND o.ClientID = $cID; ";

            $result = $conn->query($sql);

            $result2 = $conn->query($expdate);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc() AND $row2 = $result2->fetch_assoc()) {
            echo "<tr><td>" . $row["GameName"]. "</td><td>" . $row["Subscription"] . ' months' . "</td><td>" . $row2["expdate"]. "</td></tr>";
            }

            echo "</table>";
            } else { echo "The table is empty"; }
            $conn->close();
            ?>
            </tbody>
        </table>
        <center>
            <hr>
        
        <table>
            <tr class="text"> 
                <h6 .line> Want to Unsubscribe a game? </h6>
                <form method="post">
                    <td> Select a game</td>
                    <td> 

                        <?php
                            $sql = "    SELECT g.GameName 
                                        FROM orderitem o , game g , own w 
                                        WHERE o.GameID=g.GameID AND o.GameID=w.GameID 
                                            AND DATE_ADD( o.ODate , INTERVAL w.Subscription MONTH) > (SELECT CURDATE())
                                            AND o.ClientID = $cID;";
                            
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                // echo " <input type="radio" name="usgame" ><label>" . $row["GameName"]. "</label><br>";
                                }
                            }

                        ?>

                        <input type="radio" name="usgame" ><label>HTML</label><br> 
                    </td>
                </tr>
                <tr>
                    <td> <input type="button" class="usbtn" value="Unsubscribe" > </button> </td>
                </tr>

                </form>
            
        </table>
            

    </div>

    <footer>
        <img  src="../Images/Logo/Facebook.png" class="flogo">
        <img  src="../Images/Logo/Instergram.png" class="flogo">
        <img  src="../Images/Logo/Twitter.png" class="flogo">
    </footer>

    <script src="../Js/Main.js"></script>

</body>
</html>