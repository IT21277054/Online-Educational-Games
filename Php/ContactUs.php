
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../Styles/ContactUs.css">
    <link rel="stylesheet" href="../Styles/Styles.css">

    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="shortcut icon" href="../images/2323134-middle.png/">
    <link rel="preconnect" href="https://fonts.gstatic.com">
   
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:ital,wght@0,100;0,200;" -->
   <link rel="icon" type="favicon" href="../Images/favicon.png" />
    <title>Contact Us</title>
</head>

<body>
    <!--Navigation bar-->



<!-- Background -->

<video width ="320" height="240" autoplay muted loop class ="bgvideo">
    <source src="../images/ContactVideo.mp4" type ="video/mp4"> 
</video>


    <!--Navigation bar-->

    <?php

    if(isset($_SESSION['email'])){
      echo "<header>
      <ul id='Nav-bar-id' class='Nav-bar'>
        <img src='../images/Logo/final.png' id='logo' />
        <a href='Logout.php' class='VNav-button'><li>Logout</li></a>
        <a href='MyAccount.php' class='VNav-button'><li>My Account</li></a>
        <a href='ContactUs.php' class='VNav-button'><li>Contact</li></a>
        <a href='AddFriend.php' class='VNav-button'><li>Add Friends</li></a>
        <a href='AboutUs.php' class='VNav-button'><li>About</li></a>
        <a href='Games.php' class='VNav-button'><li>Games</li></a>
        <a href='index.php' class='VNav-button'><li>Home</li></a>
        <!-- <a href='' class='VNav-button'><li>Contact</li></a> -->
      </ul>
    </header>";

  } else { 
    echo"<header>
      <ul id='Nav-bar-id' class='Nav-bar'>
        <img src='../images/Logo/final.png' id='logo' />
        <a href='../Html/SignUp.html' class='VNav-button'><li>Login</li></a>
        <a href='ContactUs.php' class='VNav-button'><li>Contact</li></a>
        <a href='AboutUs.php' class='VNav-button'><li>About</li></a>
        <a href='Games.php' class='VNav-button'><li>Games</li></a>
        <a href='index.php' class='VNav-button'><li>Home</li></a>
      </ul>
    </header>";
  }

    ?>

<!-- Title -->

</div>

<img src="../images/ContactUs2.gif" class = "Vfpage">

<div class="Vtitle">Contact Us</div>

<!-- Content -->
<div class="Vcontent">
  <fieldset class ="Vfield">
  <div class="OneLine">
  <form id = 'testimonials'>
<div class='testimonial-box-container'>

    <!-- Box-2 -->
    <div class='testimonial-box'>

        <!-- img---- -->
        <div class='profile-img1'>
          <img src='..\images\call8.png'/>
      </div>
        <!-- top-------------->
        <div class ='box-top'>
            <!-- profile -->
            <div class='profile'>
                <!-- name-andUsername -->
                <div class='name-user'>
                    <strong>Talk with us</strong>

                    <div class='client-comment'>
                      <p>Call us any time if you want to know how we work and if you want to give us your feedback</p>

                      <span>+94 76 5643133</span>
                  </div>
                </div>   
            </div>
    </div>
</div>
</div>
    





<!-- Box 2 -->

<form id = 'testimonials'>

<div class='testimonial-box-container'>

    <!-- Box-1 -->
    <div class='testimonial-box'>

        <!-- img---- -->
        <div class='profile-img1'>
          <img src='..\images\msg4.png'/>
      </div>
        <!-- top-------------->
        <div class ='box-top'>
            <!-- profile -->
            <div class='profile'>
                <!-- img---- -->
               

                <!-- name-andUsername -->
                <div class='name-user'>
                    <strong>Drop a Message</strong>

                    <div class='client-comment'>
                      <p>Drop a message any time and we will get back to you as soon as possible.</p>

                      <span>+94 76 5643133</span>
                  </div>
                </div>
            </div>
    </div>
</div>
</fieldset>  
</div> 
</form>
</div>




<!-- Footer -->
<footer>
    <img src="..\images/Logo/Facebook.png" class = "flogo">
    <img src="..\images/Logo/Instergram.png" class="flogo">
    <img src="..\images/Logo/Twitter.png" class="flogo">
</footer>


<script src="../Js/Feedback.js"></script>

</body>
</html>