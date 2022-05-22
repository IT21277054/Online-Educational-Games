<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="../Styles/PayHistory.css">
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
    <title>Payment History</title>
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
        
    
</header>

    <!-- <img src="../Images/Cover.jpg" class = "fpage"> -->
    <div class="heading">Payment<br>History</div>
    <img src="../Images/gamepad.gif" class="phgif">
    <div class="phcontent">

    <center>
        <table boarder =1 >
        <thead> 
            <tr> 
                <td class="line" > Game name</td>     
                <td class="line" > Order date </td>                   
                <td class="line" > Order status</td>  
                <td class="line" > Price </td>
            </tr>
        <thead>

        <tbody>
        
        <?php
            include '../Php/dbConnection.php';

            $sql = "SELECT g.GameName , o.ODate , o.OStatus , o.Price 
                    FROM orderitem o , game g 
                    WHERE o.GameID=g.GameID 
                    ORDER BY o.ODate DESC;";
                    
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["GameName"]. "</td><td>" . $row["ODate"] . "</td><td>"
            . $row["OStatus"]. "</td> <td>". '$'. $row["Price"]. "</td></tr>";
            }
            echo "</table>";
            } else { echo "The table is empty"; }
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