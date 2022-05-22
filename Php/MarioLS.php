<?php
// include db connection
include './dbConnection.php';

// start session
session_start();
$email = $_SESSION['email'];


$sql = "SELECT * FROM client WHERE Email = '$email'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$clientID = $row['ClientID'];

$_SESSION['GameID'] = 1001; // 

$sql = "SELECT * FROM own WHERE ClientID = '$clientID' AND GameID = 1001";
$result = mysqli_query($conn,$sql);

if($result -> num_rows > 0){
    echo "<script>location.replace('../Html/StartGameMario.html')</script>";
}
else{
    echo "<script>location.replace('../Php/MyCart.php')</script>";
}



?>