<?php

// include db connection
include '../Php/dbConnection.php';

// start session
session_start();

$email = $_SESSION['email'];

$rID = $_GET['rID'];
$sql = "DELETE FROM review WHERE ReviewID = '$rID'";


if(mysqli_query($conn, $sql)){

    echo "<script>alert('Deleted the review');</script>";   
    header("Location: ./MyReviewHistory.php");
}

?>