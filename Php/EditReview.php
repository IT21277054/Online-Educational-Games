<?php

// include db connection
include '../Php/dbConnection.php';

// start session
session_start();

$email = $_SESSION['email'];

$rID = $_GET['rID'];
$sql = "SELECT * FROM review WHERE ReviewID = $rID";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

if(!$result->num_rows > 0)
{
    echo "<script>alert('error!')</script>";
}

else{
    $Topic = $row['Topic'];
    $Content = $row['Content'];
}

if(isset($_POST['submit'])){

    $Topic = $_POST['Topic'];
    $Content = $_POST['Content'];

    $sql = "UPDATE review SET Topic='$Topic',Content='$Content',stars='$email'where ReviewID='$rID'";
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Success')</script>";
    }
    header("Location: ./MyReviewHistory.php");

}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../Styles/EditReview.css">
    <link rel="stylesheet" href="../Styles/Styles.css">

    <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <title>My review</title>
</head>

<body>
    <!--Navigation bar-->



<!-- Background -->

<video width ="320" height="240" autoplay muted loop class ="bgvideo">
    <source src="../images/backVideo4.mp4" type ="video/mp4"> 
</video>


    <!--Navigation bar-->

<header>
      <ul id="Nav-bar-id" class="Nav-bar">
        <img src="../images/Logo/final.png" id="logo" />
        <a href="Logout.php" class="Nav-button"><li>Logout</li></a>
        <a href="MyAccount.php" class="Nav-button"><li>My Account</li></a>
        <a href="../Html/Contact.html" class="Nav-button"><li>Contact</li></a>
            <a href="../Html/Friends.html" class="Nav-button"><li>Friends</li></a>
            <a href="../Html/About.html" class="Nav-button"><li>About</li></a>
            <a href="Games.php" class="Nav-button"><li>Games</li></a>
            <a href="index.php" class="Nav-button"><li>Home</li></a>
      </ul>
    </header>

<!-- Title -->
<img src="../images/Star.gif" class = "Rfpage">
<div class="Rtitle">Edit My Review</div>


<!-- Content -->
<div class="Rcontent">

    <fieldset>
        <legend>Edit My Review</legend>
        
    

    <form action="" method="POST">
        <input type="text" id = "reviewSubject" name = "Topic" value ="<?php echo $Topic; ?>"><br>


        <textarea type="text" id = "reviewbox" name = "Content"><?php echo $Content; ?></textarea><br>


    <!-- Add stars -->
    <div class="star-rating">
        <input type="radio" name="stars" id="star-a" value="5"/>
        <label for="star-a"></label>
        
        <input type="radio" name="stars" id="star-b" value="4"/>
        <label for="star-b"></label>
        
        <input type="radio" name="stars" id="star-c" value="3"/>
        <label for="star-c"></label>
        
        <input type="radio" name="stars" id="star-d" value="2"/>
        <label for="star-d"></label>
        
        <input type="radio" name="stars" id="star-e" value="1"/>
        <label for="star-e"></label>
        </div>
        
    <!-- Review button -->

    <div class = "Button">

        <button type = "submit" name="submit" class="AddReviewButton">Edit Review</button>

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


<script src="../js/MyReview.js"></script>

</body>
</html>