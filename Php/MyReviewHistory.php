<?php

// include db connection
include './dbConnection.php';

// start session
session_start();
$email = $_SESSION['email'];

echo "<script>alert($email)</script>";

$sql = "SELECT * FROM client where Email = '$email'"; // sql query to check if email exist in db

$result = mysqli_query($conn , $sql); // execute the query

if(!$result -> num_rows > 0){
    // echo "<script>alert('error!')</script>";
}

else
{
    $row = mysqli_fetch_array($result);
    $name = $row['FirstName'].' '.$row['LastName'];
    $cID = $row['ClientID'];

    $sql = "SELECT * FROM review where clientID = '$cID'";

    $result = mysqli_query($conn , $sql); // execute the query

    if(!$result){
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

    <link rel="stylesheet" href="../Styles/MyReviewHistory.css">
    <link rel="stylesheet" href="../Styles/Styles.css">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <title>My review History</title>
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
<img src="../images/Star.gif" class = "Rfpage">
<div class="Rtitle">My Review History</div>







<div class="Rcontent">

    <fieldset>
        <legend>My Review</legend> 



      
<?php      

 while($row = mysqli_fetch_array($result)){
     $cn = $row['Content'];
     $rID = $row['ReviewID'];
     $gID = $row['GameID'];

    $sql = "SELECT * FROM game where GameID = '$gID'";
    $result2 = mysqli_query($conn , $sql);
    $row2 = mysqli_fetch_array($result2);

    $gName = $row2['GameName'];

     if(isset($_POST['btn-edit'])){
        
        $rID = $_POST['btn-edit'];
        header("Location: ./EditReview.php?rID=".$rID);
    }
    echo "

    <form id = 'testimonials' action='' method='post'>

        <div class='testimonial-box-container'>
        
            <!-- Box-1 -->
            <div class='testimonial-box'>
                <!-- top-------------->
                <div class ='box-top'>
                    <!-- profile -->
                    <div class='profile'>
                        <!-- img---- -->
                        <div class='profile-img'>
                            <img src='..\images\Tinkerbell.jpg'/>
                        </div>
        
                        <!-- name-andUsername -->
                        <div class='name-user'>
                            <strong>".$name."</strong>
                            <span>".$gName."</span>
                        </div>
                    </div>
        
                    <!-- reviews -->
                    <div class='star-rating'>
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
                </div>
        
        <!-- Comments------------------ -->
        <div class='client-comment'>
            <p>".$cn."</p>
        </div>
        

        
        <div class ='OneLine'>
          

            <button type = 'submit' class='EditReviewButton' name='btn-edit' value='".$rID."'>Edit Review<a></button>
    
            <button type = 'button' class='DeleteReviewButton'>Delete Review</button>
    
        </div>
            </div>
        
        </div>
        
        
           
        
        
        </form> ";  
        
}
        ?>
        
            </fieldset>
        
</div>
        



<!-- Footer -->
<footer>
    <img src="..\images/Logo/Facebook.png" class = "flogo">
    <img src="..\images/Logo/Instergram.png" class="flogo">
    <img src="..\images/Logo/Twitter.png" class="flogo">
</footer>


<script src="../js/MyReviewHistory.js"></script>

</body>
</html>