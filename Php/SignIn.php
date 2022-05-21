<?php 

// include db connection
include './dbConnection.php';

// start session
session_start();

// check already session started
if(isset($_SESSION['email'])){
    header("Location: ../Php/index.php");
}

// check if the submit button clicked 
if(isset($_POST['submit'])){
    $email = $_POST['email']; // store the user given mail
    $password = md5($_POST['password']); // encrypt and store the user given password 

    $sql = "SELECT * FROM client where Email='$email' AND ClientPassword='$password'"; // sql query to check if email and password exist in db

    $result = mysqli_query($conn , $sql); // execute the query 

    if($result -> num_rows > 0) { // check the query result returned something
        $row = mysqli_fetch_assoc($result); // take result as a associate array
        $_SESSION['email'] = $row['Email']; // 
        header("Location: ../Php/index.php"); // if mail and password are match logged the user
    }
    else{
        echo"<script type='text/javascript'>alert('Invalid Credentials');  history.go(-1);</script>";
    } 
}


$conn -> close();
?>