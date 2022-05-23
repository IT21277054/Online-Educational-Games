<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?Php
        include './dbConnection.php';
        session_start();
        $email = $_SESSION['email'];

        $sql = "SELECT * FROM client WHERE Email = '$email'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $clientID = $row['ClientID'];

        $sql = "SELECT HighScore FROM score WHERE ClientID = $clientID";
        $result = mysqli_query($conn,$sql);
        while($row = $result->fetch_assoc()){
            echo $result.'<br>';
        }


        

    ?>
    <button type="button">Try Again</button>
</body>
</html>