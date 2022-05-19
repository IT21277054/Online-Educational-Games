<?php 

include './dbConnection.php';

session_start();

if(isset($_SESSION['email'])){
    header("Location: ../Html/index.html");
}

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM Client where email='$email' AND password='$password'";

    $result = mysqli_query($conn , $sql);

    if($result -> num_rows > 0) {

    }
}



?>