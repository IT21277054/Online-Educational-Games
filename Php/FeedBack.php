<?php 

include './dbConnection.php';
session_start();

if(isset($_POST['submit'])){

    $email = $_SESSION['email'];
    $fSubject = $_POST['fSubject'];
    $fContent = $_POST['fContent'];


    $sql = "SELECT * FROM client where Email = '$email'"; // sql query to check if email exist in db

    $result = mysqli_query($conn , $sql); // execute the query 
    
    if($result -> num_rows > 0){
        $row = mysqli_fetch_array($result);
        
        $cID = $row['ClientID'];
        $sql = "INSERT INTO feedback(Topic , Content , ClientID) VALUES ('$fSubject' , '$fContent' , '$cID')" ;
        if(mysqli_query($conn , $sql)){
            echo "<script>alert('Congrats you just add a review')</script>";
        }
    }else {
    echo "<script>alert('error')</script>";}

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../Styles/FeedBack.css">
    <link rel="stylesheet" href="../Styles/Styles.css">

    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="shortcut icon" href="../images/2323134-middle.png/">
    <link rel="preconnect" href="https://fonts.gstatic.com">
   
   
    <title>Feedback</title>
</head>

<body>
    <!--Navigation bar-->



<!-- Background -->

<video width ="320" height="240" autoplay muted loop class ="bgvideo">
    <source src="../images/B12.mp4" type ="video/mp4"> 
</video>


    <!--Navigation bar-->

<header>
    <ul id="Nav-bar-id" class="Nav-bar">
        <img src="..\images\Logo\final.png" id="logo">
        <a href="Contact.html" class="VNav-button"><li>Contact</li></a>
        <a href="Genre.html" class="VNav-button"><li>Genre</li></a>
        <a href="About.html" class="VNav-button"><li>About</li></a>
        <a href="Games.html" class="VNav-button"><li>Games</li></a>
        <a href="Index.html" class="VNav-button"><li>Home</li></a>

        </ul>
</header>

<!-- Title -->

<div class="Star">


</div>

<img src="../images/backFeedback.gif" class = "Vfpage">

<div class="Vtitle">Feedback</div>





<!-- Content -->
<div class="Vcontent">

  <fieldset class ="Vfield">

<form action="" method="post" >
    <input type="text" id = "feedbackSubject" name = "fSubject" value ="" placeholder ="Subject" ><br>



    <textarea type="text" id = "feedbackbox" name = "fContent" value = "" placeholder ="Content"></textarea><br>



    
<!-- Review button -->

<div class = "Button">

    <button type = "submit" name="submit" class="AddFeedbackButton">Add Feedback</button>

</div>

</form>

</fieldset>

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