<?php

// include db connection
include '../Php/dbConnection.php';

// start session
session_start();

$email = $_SESSION['email'];
$gameId = $_SESSION['GameID']


?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="../Styles/Styles.css">
    <link rel="stylesheet" href="../Styles/MyCart.css">
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
    <title>My cart</title>
</head>
<body>
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

    <video autoplay muted loop id="myVideo">
        <source src="../Images/GreenGradientBg.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>

    <!-- <img src="../Images/Logo/final.png"  class = "pic"> -->
    <div class="heading">My cart</div> <br>
    <marquee><img src="../Images/spongebob.gif" class="gif"></marquee>
    <div class="cartcontent text">

    <center>
    <button type="button" onclick="location.href = 'PayHistory.php'; "  class="btn hisbtn" > Payment history</button> </center>


    <center>
    <table boarder =1 >
        <tr> <th> Item </th>    <th> Each month </th>   <th> Months </th>       <th> Total </th>  </tr>
        <tr> <td> Ball</td>     <td> $10 </td>          <td> 1 </td>            <td> $10 </td>  </tr>
        <tr> <td> Doll</td>     <td> $15 </td>          <td> 4 </td>            <td> $60 </td>  </tr>
        <tr> <td> </td>         <td>  </td>             <td> </td>              <td class="line"> .... </td>  </tr>
        <tr><td> Transaction method</td>
            <td>
            <form action="" method="" >
                <select id="transType" name="transType" class="dropdown"> 
                    <option value="select">Select</option>
                    <option value="credit">Credit card</option>
                    <option value="debit">Debit card</option>
                    <option value="paypal">PayPal</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
            <input type="submit" value=" Pay now" onclick="alert('Confirm your paymet')"  class="btn paynow">
            </td>
            </form>
    </table>
    </center>   

        
    
    
    </div>


    <!-- <footer>
        <img  src="../Images/Logo/Facebook.png" class="flogo">
        <img  src="../Images/Logo/Instergram.png" class="flogo">
        <img  src="../Images/Logo/Twitter.png" class="flogo">
    </footer> -->

    <script src="../Js/Main.js"></script>

</body>
</html>