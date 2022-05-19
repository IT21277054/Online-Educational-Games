<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "pixxel";

$conn = mysqli_connect($serverName, $userName, $password, $dbName);

if($conn-> connect_error){
    echo "<script>'Connection error'</script>";
        die('');
    }

?>