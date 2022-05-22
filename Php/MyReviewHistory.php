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
    $cImage = $row['UserImage'];
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



    <title>My review History</title>
</head>

<body>
    <!--Navigation bar-->



<!-- Background -->

<video width ="320" height="240" autoplay muted loop class ="bgvideo">
    <source src="../images/BigStars.mp4" type ="video/mp4"> 
</video>


    <!--Navigation bar-->

<header>
      <ul id="Nav-bar-id" class="Nav-bar">
        <img src="../images/Logo/final.png" id="logo" />
        <a href="Logout.php" class="RNav-button"><li>Logout</li></a>
        <a href="MyAccount.php" class="RNav-button"><li>My Account</li></a>
        <a href="../Html/Contact.html" class="RNav-button"><li>Contact</li></a>
            <a href="../Html/Friends.html" class="RNav-button"><li>Friends</li></a>
            <a href="../Html/About.html" class="RNav-button"><li>About</li></a>
            <a href="Games.php" class="RNav-button"><li>Games</li></a>
            <a href="index.php" class="RNav-button"><li>Home</li></a>
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
     $topic = $row['Topic'];
     $cn = $row['Content'];
     $rID = $row['ReviewID'];
     $gID = $row['GameID'];
     $star = $row['stars'];

    $sql = "SELECT * FROM game where GameID = '$gID'";
    $result2 = mysqli_query($conn , $sql);
    $row2 = mysqli_fetch_array($result2);

    // echo "<script>alert($star)</script>";

    

    $gName = $row2['GameName'];

    if(isset($_POST['btn-edit'])){
        
        $rID = $_POST['btn-edit'];
        header("Location: ./EditReview.php?rID=".$rID);
    }
    else if(isset($_POST['btn-delete'])) {
        
        $rID = $_POST['btn-delete'];
        header("Location: ./DeleteReview.php?rID=".$rID);
    }

    $s1 = "";
    $s2 = "";
    $s3 = "";
    $s4 = "";
    $s5 = "";
    if($star == '1' ){
        $s1 = "checked";
        }else if($star == '2' ){
        $s2 = "checked";
        }else if($star == '3' ){
        $s3 = "checked";
        }else if($star == '4' ){
        $s4 = "checked";
        }else if($star == '5'){
        $s5 = "checked";
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
                            <img src='../Images/User Images/".$cImage."'/>
                        </div>
        
                        <!-- name-andUsername -->
                        <div class='name-user'>
                            <strong>".$name."</strong>
                            <span>".$gName."</span>
                        </div>
                    </div>
        
            
                    
                
                    <!-- reviews -->
                    <div class='star-rating' style='pointer-events: none'>
                        <input type='radio' name='stars".$rID."' id='star-a".$rID."' value='5' ".$s5." />
                        <label for='star-a".$rID."'></label>
                        
                        <input type='radio' name='stars".$rID."' id='star-b".$rID."' value='4' ".$s4."/>
                        <label for='star-b".$rID."'></label>
                        
                        <input type='radio' name='stars".$rID."' id='star-c".$rID."' value='3' ".$s3."/>
                        <label for='star-c".$rID."'></label>
                        
                        <input type='radio' name='stars".$rID."' id='star-d".$rID."' value='2' ".$s2."/>
                        <label for='star-d".$rID."'></label>
                        
                        <input type='radio' name='stars".$rID."' id='star-e".$rID."' value='1' ".$s1."/>
                        <label for='star-e".$rID."'></label>
                    </div>
            </div>
        
        <!-- Comments------------------ -->
        <div class='client-comment'>
        <div class='topic'><h5>".$topic."</h5></div>
            <p>".$cn."</p>
        </div>
        

        
        <div class ='OneLine'>
          

            <button type = 'submit' class='EditReviewButton' name='btn-edit' value='".$rID."'>Edit Review</button>
    
            <button type = 'submit' class='DeleteReviewButton' name='btn-delete' value='".$rID."'>Delete Review</button>
    
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


<script src="../Js/MyReviewHistory.js"></script>

</body>
</html>