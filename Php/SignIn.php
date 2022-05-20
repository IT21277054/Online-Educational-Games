<?php 

include './dbConnection.php';

session_start();

if(isset($_SESSION['email'])){
    header("Location: ../Html/index.html");
}

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM client where Email='$email' AND ClientPassword='$password'";

    $result = mysqli_query($conn , $sql);

    if($result -> num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $row['Email'];
        header("Location: ../Html/index.html");
    }
    else{
        echo"<script type='text/javascript'>alert('Invalid Credentials');  history.go(-1);</script>";
    } 
}



?>