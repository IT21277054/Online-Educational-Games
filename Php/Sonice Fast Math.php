<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../Styles/Mario.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="content">
    <div id="contdown">
        <span id="seconds">30</span>
    </div>
    <p id="fvalue"></p>
    <p id="svalue"></p>
    <input type="text" placeholder="Type something..." id="myInput"><br>
    <button type="button" onclick="getInputValue();" class="vbtn">Get Value</button>
    <p id="score"></p>
    </div>

    <script src="../Js/Sonic.js"></script>

<?php
    $serverName = "localhost";
    $username ="root";
    $password ="";
    $dbName = "pixxel";
                        
    $conn = mysqli_connect($serverName, $username, $password, $dbName);
    $score ='<script>document.writeln(score);</script>';
                        
        if($conn-> connect_error){
                echo "<script>('Connection error')</script>";
                die('');
            }

        $sql = "SELECT HighScore FROM score WHERE ClientID = 10000";
        $result = mysqli_query($conn,$sql);
        if($result -> num_rows == 0){
            $sql = "INSERT INTO (HighScore,ClientID,GameID) score VALUES ($score,10000,1000)";
            $conn->query($sql);
            alert("Yay");
            }
        else{
            $sql = "UPDATE score SET HighScore = $score WHERE ClientID = 10000";
            }                
?>
            


</body>
</html>