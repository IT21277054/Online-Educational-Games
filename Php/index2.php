<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../Styles/index2.css">
    <link rel="stylesheet" href="../Styles/Styles.css">

    <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <title>Home</title>
</head>

<body>
   

 <!-- Web site navigation bar -->
 <?php

if(isset($_SESSION['email'])){
  echo "<header>
  <ul id='Nav-bar-id' class='Nav-bar'>
    <img src='../images/Logo/final.png' id='logo' />
    <a href='Logout.php' class='Nav-button'><li>Logout</li></a>
    <a href='MyAccount.php' class='Nav-button'><li>My Account</li></a>
    <a href='../Html/Contact.html' class='Nav-button'><li>Contact</li></a>
        <a href='../Html/Friends.html' class='Nav-button'><li>Friends</li></a>
        <a href='../Html/About.html' class='Nav-button'><li>About</li></a>
        <a href='Games.php' class='Nav-button'><li>Games</li></a>
        <a href='index.php' class='Nav-button'><li>Home</li></a>
    <!-- <a href='../Html/ContactUs.Html' class='Nav-button'><li>Contact</li></a> -->
  </ul>
</header>";

} else { 
echo"<header>
  <ul id='Nav-bar-id' class='Nav-bar'>
    <img src='../images/Logo/final.png' id='logo' />
    <a href='../Html/SignUp.html' class='Nav-button'><li>Login</li></a>
    <a href='../Html/Contact.html' class='Nav-button'><li>Contact</li></a>
    <a href='../Html/About.html' class='Nav-button'><li>About</li></a>
    <a href='Games.php' class='Nav-button'><li>Games</li></a>
    <a href='index.php' class='Nav-button'><li>Home</li></a>
  </ul>
</header>";
}

?>



<!-- Background -->

<video width ="320" height="240" autoplay muted loop class ="bgvideo">
    <source src="../images/backVideo4.mp4" type ="video/mp4"> 
</video>








<div class = "mainVideo">
<img src="../images/GirlWithDog.gif" class = "Rfpage">
</div>
<!-- Title -->

<div class="title">Welcome<br />Y'all</div>


<!-- Content -->
<div class="Rcontent">

    <fieldset>
        <legend>My Review</legend>
        
            <!-- <img src="images/Cover Photo 2.png" class="fpage" /> -->
            <!-- <div class="slide-container" id="slide-container" width="50%" height="40%">
                <center>
                    <img id="slider-image" alt="" width="50%" height="40%" >
                    <div class ="text-box">
            <h1>Silence Is Not Enough</h1>
            <p>Tinker Bell is a direct-to-video computer-animated fantasy 
                film series produced by DisneyToon Studios as part of the 
                Disney Fairies franchise. Voices of Mae Whitman, Lucy Liu,
                 Raven-Symoné, America Ferrera, Kristin Chenoweth and 
                 Pamela Adlon are featured in the films</p>
                    </div>

                </center>
            </div> -->





            <div class="slider">

<input type="radio" name="radio-btn" id="radio1">
<input type="radio" name="radio-btn" id="radio2">
<input type="radio" name="radio-btn" id="radio3">
<input type="radio" name="radio-btn" id="radio4">
<!-- radio buttons end -->

<!-- slide image start -->
<div class="slide first">
    <img src = "../images/Slideshow/img1.jpg" alt="">
</div>

<div class="slide">
    <img src = "../images/Slideshow/img2.jpg" alt="">
</div>

<div class="slide">
    <img src = "../images/Slideshow/img3.jpg" alt="">
</div>

<div class="slide">
    <img src = "../images/Slideshow/img1.jpg" alt="">
</div>

<!-- slide images end -->

<!-- automatic navigation start -->

<div class="navigation-auto">
    <div class="auto-btn1"></div>
    <div class="auto-btn2"></div>
    <div class="auto-btn3"></div>
    <div class="auto-btn4"></div>
</div>
<!-- automatic navigation end
</div>

<!-- manual navigation start -->

<div class="navigation-manual">
<label for="radio1" class="manual-btn"></label>
<label for="radio2" class="manual-btn"></label>
<label for="radio3" class="manual-btn"></label>
<label for="radio4" class="manual-btn"></label>
</div>

</div>

<script type="text/javascript">
var counter = 1;
setInterval(function(){
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if(counter > 4){
        counter = 1;
    }

}, 5000);
</script>




    </fieldset>


   
    

</div>




<!-- Footer -->
<footer>
    <img src="..\images/Logo/Facebook.png" class = "flogo">
    <img src="..\images/Logo/Instergram.png" class="flogo">
    <img src="..\images/Logo/Twitter.png" class="flogo">
</footer>


<script src="../Js/index2.js"></script>

</body>
</html>