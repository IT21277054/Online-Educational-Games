<?php
    // include db connection
    include './dbConnection.php';
    session_start();
    $email = $_SESSION['email'];
    $gameID = $_SESSION['GameID'];

    $sql = "SELECT * FROM client WHERE Email = '$email'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $clientID = $row['ClientID'];

    $sql = "SELECT ScoreID FROM score WHERE ClientID = $clientID AND GameID = $gameID";
    $result = mysqli_query($conn,$sql);

    if($result -> num_rows == 0){
        echo "<script>alert('You don't have a position')</script>";
    }
    else{
        $sql ="DELETE FROM score WHERE ClientID = $clientID AND GameID = $gameID";
        $result = mysqli_query($conn,$sql);
        echo "<script>alert('You don't have a position')</script>";
    }


?>