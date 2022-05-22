<?php

// include db connection
    include '../Php/dbConnection.php';

// start session
    session_start();

    if(isset($_POST['submit'])){
        $email = $_SESSION['email'];
        $gid = $_GET['gID'];

        $sql = "SELECT * FROM client where Email = '$email'"; // sql query to check if email exist in db

        $result = mysqli_query($conn , $sql); // execute the query 

        if($result){
        $row = mysqli_fetch_array($result);

        $cID = $row['ClientID'];
        $Topic = $_POST['Topic'];
        $Content = $_POST['Content'];
        $stars = $_POST['stars'];
        

        $sql = "INSERT INTO review(Topic , Content ,stars, ClientID, GameID) values ('$Topic' , '$Content' ,'$stars' , '$cID','$gid')";


        if(mysqli_query($conn , $sql)){
            echo "<script>alert('Success!')</script>";
            header("Location: ./Reviews.php?gID=".$gid);
            
        }
        else
        {
            echo "<script>alert('Failed!')</script>";
        }

        }

        else{
            echo "<script>alert('error!')</script>";
        }
        
    }


?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../Styles/MyReview.css">
    <link rel="stylesheet" href="../Styles/Styles.css">

    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap"
      rel="stylesheet"
    />



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <title>Add review</title>
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
        <img src="..\images\Logo\final.png" id="logo">
        <a href="Contact.html" class="RNav-button"><li>Contact</li></a>
        <a href="Genre.html" class="RNav-button"><li>Genre</li></a>
        <a href="About.html" class="RNav-button"><li>About</li></a>
        <a href="Games.html" class="RNav-button"><li>Games</li></a>
        <a href="Index.html" class="RNav-button"><li>Home</li></a>
        <hr id="line">
        </ul>
</header>

<!-- Title -->
<img src="../images/Star6.gif" class = "Rfpage">
<div class="Rtitle">Add Review</div>


<!-- Content -->
<div class="Rcontent">

    <fieldset>
        <legend>Add Review</legend>

    <form action="" method="POST">
        <input type="text" id = "reviewSubject" name = "Topic" placeholder ="Subject"><br>



        <textarea type="text" id = "reviewbox" name = "Content" placeholder ="Add your valuable review..."></textarea><br>


    <!-- Add stars -->
    <div class="star-rating"  >
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

    <div class ='OneLine'>

    <div class = "Button">
        <button type = "submit" name="submit" class="AddReviewButton">Add Review</button>
    </div>

    <div class = "Button">
        <button type = "submit" name="submit" class="AddReviewButton">All Reviews</button>
    </div>

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