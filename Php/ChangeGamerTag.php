<?php
// include db connection
include './dbConnection.php';

// start session
session_start();
$email = $_SESSION['email'];


if($conn-> connect_error){
    echo "<script>('Connection error')</script>";
    die('');

    // session_start();

    // if (isset($_SESSION['Bruice@gmail.com'])) {
    // // header("Location: ../Html/SignUp.html");
    // }
}
    // $email =$_POST['email'];
    $gamertag = $_POST['gtag'];

    if(empty($gamertag)){
        echo "<script>alert('Can not set an empty value');  location.replace('ChangeGamerTagFile.php')</script>";
    }
    else{

    $sql = "SELECT * FROM client WHERE GamerTag = '$gamertag'";

    $result = mysqli_query($conn,$sql);

    if($result -> num_rows == 0){
        $sql = "UPDATE client SET GamerTag = '$gamertag' WHERE Email ='$email'";
        $result = mysqli_query($conn, $sql);
        echo "<script>alert('Success'); location.replace('ChangeGamerTagFile.php')</script>";
    }
    else{
        echo "<script>alert('GamerTag Already Exists');  location.replace('ChangeGamerTagFile.php')</script>";
    }

}


    // session_destroy();
    // $conn -> close();
    // 
?>