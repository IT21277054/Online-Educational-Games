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

        // $score ="<script>document.write(finalscore);</script>";
        $score = $_POST[finalscore];
        // $score = 100;
        $gamerID = 1000;

        $sql = "SELECT HighScore FROM score WHERE ClientID = '$clientID'";
        $result = mysqli_query($conn,$sql);
        if($result -> num_rows == 0){
            $sql = "INSERT INTO score (HighScore,ClientID,GameID) VALUES ('$score','$clientID','$gamerID')";
            $result = mysqli_query($conn, $sql);
            echo "<script>alert('Yay');</script>";
            }
        else{
            $sql = "UPDATE score SET HighScore = $score WHERE ClientID = 10000";
            $result = mysqli_query($conn, $sql);
            echo "<script>alert('Yay Update');</script>";
            }                
?>