<!DOCTYPE html>
<html lang="en">
<head>    
    <link rel="stylesheet" href="../Styles/Sonic.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <video autoplay muted loop id="bgvideo">
        <source src="../Videos/PlayGame.mp4" type="video/mp4">
    </video>

    <center>
    <div class="content">
        <p id = "question"></p>
        <p id = "score"></p>
        <input type="text" placeholder="Type something..." id="myInput"><br>
        <button type="button" onclick="getInputValue();" class="vbtn">Get Value</button>
        <button type="button" onclick="getInputHint();" class="gbtn">Get Hint</button>
        <p id = "gethint"></p>
    </div>
    </center>
    
    
    <script src="../Js/Mario.js"></script>

</body>
</html>