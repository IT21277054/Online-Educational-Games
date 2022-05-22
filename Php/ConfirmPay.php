<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="../Styles/Styles.css">
    <link rel="stylesheet" href="../Styles/ConfirmPay.css">
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
    <title>Confirm payment</title>
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


    


    <h1>Yor are almost there! シ </h1>
    <div class="conTitle">Confirm <br>Payment</div>
    
    <div class="conContent">
        <div>
            <h6 class="text"> Do you have a promo code? <br><br> Enter it here !!! </h6>
            <form>

                <input type="text" name="promocode" class="inputbox1">
                    <?php
                        
                    ?>
                <button type="submit" id="submitbtn" class="submitbut btn"  onclick="validateCode() displayDiscount() displayTotal()">
                    submit 
                </button>
                <p style="color:white" id="demo"> </p>
            </form>

            <br><br>
        </div>

        <hr>

        <div class="text"><center>
            <table> 
                <tr>
                    <td>Total</td>
                    <td id="total">10</td>
                </tr>

                <tr>
                    <td>Discount</td>
                    <td id="discount">2</td>
                </tr>

                <tr class="line"s>
                    <td>final amount</td>
                    <td id="finalVal">value</td>
                </tr>
                
                <tr>
                    <td> Transaction method</t6>
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
            <table></center>
        </div>

    </div>




    <footer>
        <img  src="../Images/Logo/Facebook.png" class="flogo">
        <img  src="../Images/Logo/Instergram.png" class="flogo">
        <img  src="../Images/Logo/Twitter.png" class="flogo">
    </footer>

    <script src="../Js/ConfirmPay.js"></script>
    <script src="../Js/Main.js"></script>

</body>
</html>