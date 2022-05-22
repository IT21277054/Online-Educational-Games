<?php

// include db connection
include '../Php/dbConnection.php';

// start session
session_start();
$_SESSION['GameID'] = 1000;

$gID = $_SESSION['GameID'];

$sql = "SELECT * FROM Review where GameID = '$gID'"; // sql query to check if email exist in db

$result = mysqli_query($conn , $sql); // execute the query

if($result -> num_rows > 0){
    // $sql2 = "SELECT FirstName + LastName as 'fName' FROM Client where GameID = '$gID'"; 
}

else
{
    echo "<script>alert('Failed!')</script>";
    // $sql = "SELECT * FROM review where GameID = '$gID'";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../Styles/Reviews.css">
    <link rel="stylesheet" href="../Styles/Styles.css">

    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="shortcut icon" href="../images/2323134-middle.png/">
    <link rel="preconnect" href="https://fonts.gstatic.com">
   

    
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

   
    <title>Reviews</title>
</head>

<body>
    <!--Navigation bar-->



<!-- Background -->

<video width ="320" height="240" autoplay muted loop class ="bgvideo">
    <source src="../images/Falling Stars.mp4" type ="video/mp4"> 
</video>


    <!--Navigation bar-->

<header>
    <ul id="Nav-bar-id" class="Nav-bar">
        <img src="..\images\Logo\final.png" id="logo">
        <a href="Logout.php" class="RNav-button"><li>Logout</li></a>
        <a href="MyAccount.php" class="RNav-button"><li>My Account</li></a>
        <a href="../Html/Contact.html" class="RNav-button"><li>Contact</li></a>
        <a href="../Php/AddFriend.php" class="RNav-button"><li>Add Friends</li></a>
        <a href="../Html/About.html" class="RNav-button"><li>About</li></a>
        <a href="Games.php" class="RNav-button"><li>Games</li></a>
        <a href="index.php" class="RNav-button"><li>Home</li></a>

        </ul>
</header>

<!-- Title -->


<img src="../images/Star5.gif" class = "Rfpage">

<div class="Rtitle">Reviews</div>





<!-- Content -->
<div class="Rcontent">

    <fieldset class="field">
        <legend>Reviews</legend> 





        
    <!-- Testimonials--------------------------- -->


<?php      

while($row = mysqli_fetch_array($result) ){
    $topic = $row['Topic'];
    $content = $row['Content'];
    $cID = $row['ClientID'];
    $star = $row['stars'];
    $rID = $row['ReviewID'];

    $sql2 = "SELECT * FROM Client where ClientID = '$cID'";
    $result2 = mysqli_query($conn , $sql2);
    $row2 = mysqli_fetch_array($result2);
    $Name = $row2['FirstName'].' '.$row2['LastName'];
    $cImage = $row2['UserImage'];

    $sql3 = "SELECT * FROM game where GameID = $gID";
    $result3 = mysqli_query($conn , $sql3);
    $row3 = mysqli_fetch_assoc($result3);

    $gName = $row3['GameName'];

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

    // echo "<script>alert($cn)</script>";
   echo "

<form id = 'testimonials'>

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
                    <strong>".$Name."</strong>
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
    <div class='topic'><h5>".$topic."</h5></div>
        <div class='client-comment'>
                <p>".$content."</p>
            </div>

    </div>

</div>

    <!-- <div class ='OneLine'> -->


    <!-- <div class='likes'>
    <i onclick ='myFunction(this)' class ='fa fa-thumbs-up'></i>
</div> -->





</form>";

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


<script src="../js/Reviews.js"></script>

</body>
</html>