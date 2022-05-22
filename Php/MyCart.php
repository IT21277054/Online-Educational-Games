<?php

        // include db connection
        include '../Php/dbConnection.php';

        // start session
        session_start();

        $_SESSION['gameID']=1000;
        $gameID = $_SESSION['gameID'];
        

//calc discount
        $sql = " SELECT GameName as gName
                    FROM game WHERE GameID='$gameID'" ;
        

       $result = mysqli_query($conn , $sql);


//submit form
        $_SESSION['email']= 'vihangi@gmail.com';
        $email = $_SESSION['email'];

        $sql2 = " SELECT ClientID as cID 
                    FROM client WHERE Email='$email';";

       $result2 = mysqli_query($conn , $sql2);

    
        

       // $cID = $result2;
       // $

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
        <tr>    <td> Game name </td>           
                <td> 
                    <?php if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                            echo $row["gName"];}} ?> 
                <td> </td>
        </tr>

        <tr> <td> Subscription months</td> 
            <form>  
                <td> <input type="text" id="submonths" class="inputbox"> </td>
                    
                <td> <button type="button" onclick="discount()"  class="calbtn" > calculate </button> </td> 
        </tr>

        <tr> 
            <td> Total </td> 

            <form action="" method="POST" >
            <td id="total" name="total"> $ </td> 
        </tr>


        <tr><td> Transaction method</td>
            <td></td>
                <td>
                
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
    <script src="../Js/MyCart.js"></script>

</body>
</html>

