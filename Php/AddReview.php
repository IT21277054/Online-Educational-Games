<?php

// include db connection
    include '../Php/dbConnection.php';

// start session
    session_start();
        $gid = $_GET['gID'];

    if(isset($_POST['submit'])){
        $email = $_SESSION['email'];
        

        $sql = "SELECT * FROM client where Email = '$email'"; // sql query to check if email exist in db

        $result = mysqli_query($conn , $sql); // execute the query 

        if($result->num_rows > 0){
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
 if(isset($_POST['allReview'])){
     $gid = $_GET['gID'];
     header("Location: ./Reviews.php?gID=".$gid);
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
    <link rel="icon" type="favicon" href="../Images/favicon.png" />
    <title>Add review</title>
</head>

<body>
    <!--Navigation bar-->



<!-- Background -->

<video width ="320" height="240" autoplay muted loop class ="bgvideo">
    <source src="../images/backVideo4.mp4" type ="video/mp4"> 
</video>


     <!-- Web site navigation bar -->
     <?php

if(isset($_SESSION['email'])){

    $check = "true";
  echo "<header>
  <ul id='Nav-bar-id' class='Nav-bar'>
    <img src='../images/Logo/final.png' id='logo' />
    <a href='Logout.php' class='RNav-button'><li>Logout</li></a>
    <a href='MyAccount.php' class='RNav-button'><li>My Account</li></a>
    <a href='ContactUs.php' class='RNav-button'><li>Contact</li></a>
    <a href='AddFriend.php' class='RNav-button'><li>Add Friends</li></a>
    <a href='AboutUs.php' class='RNav-button'><li>About</li></a>
    <a href='Games.php' class='RNav-button'><li>Games</li></a>
    <a href='index.php' class='RNav-button'><li>Home</li></a>
    <!-- <a href='' class='RNav-button'><li>Contact</li></a> -->
  </ul>
</header>";

} else { 
    $check = "";
echo"<header>
  <ul id='Nav-bar-id' class='Nav-bar'>
    <img src='../images/Logo/final.png' id='logo' />
    <a href='../Html/SignUp.html' class='RNav-button'><li>Login</li></a>
    <a href='ContactUs.php' class='RNav-button'><li>Contact</li></a>
    <a href='AboutUs.php' class='RNav-button'><li>About</li></a>
    <a href='Games.php' class='RNav-button'><li>Games</li></a>
    <a href='index.php' class='RNav-button'><li>Home</li></a>
  </ul>
</header>";
}

?>

<!-- Title -->
<img src="../images/Star6.gif" class = "Rfpage">
<div class="Rtitle">Add Review</div>


<!-- Content -->
<div class="Rcontent">

    <fieldset>
        <legend>Add Review</legend>

    <form action="" method="POST">
    <?php
    if(!empty($check)){
    echo "
        <input type='text' id = 'reviewSubject' name = 'Topic' placeholder ='Subject'><br>



        <textarea type='text' id = 'reviewbox' name = 'Content' placeholder ='Add your valuable review...'></textarea><br>


    <!-- Add stars -->
    <div class='star-rating'  >
        <input type='radio' name='stars' id='star-a' value='5'/>
        <label for='star-a'></label>
        
        <input type='radio' name='stars' id='star-b' value='4'/>
        <label for='star-b'></label>
        
        <input type='radio' name='stars' id='star-c' value='3'/>
        <label for='star-c'></label>
        
        <input type='radio' name='stars' id='star-d' value='2'/>
        <label for='star-d'></label>
        
        <input type='radio' name='stars' id='star-e' value='1'/>
        <label for='star-e'></label>
        </div>
        
    <!-- Review button -->

    <div class ='OneLine'>

    <div class = 'Button'>
        <button type = 'submit' name='submit' class='AddReviewButton'>Add Review</button>
    </div>";}


    else {
        echo "

        <h5>You're not Logged In!<br>Please Login to add review or click all review to check review</h5>
        ";
    }
    ?>

    
    <div class = "Button">
        <button type = "submit" name="allReview" class="AddReviewButton">All Reviews</button>
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