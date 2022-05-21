<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="contdown">
        <span id="seconds">600000</span>
    </div>
    <p id="fvalue"></p>
    <p id="svalue"></p>
    <input type="text" placeholder="Type something..." id="myInput"><br>
    <button type="button" onclick="getInputValue();" class="vbtn">Get Value</button>
    <p id="score"></p>

    <script>


        timeLeft = 60000;

        function countdown() {
            timeLeft--;
            document.getElementById("seconds").innerHTML = String( timeLeft );
            if (timeLeft > 0) {
                setTimeout(countdown, 1000);
            }
            else{
                window.location.replace("TryAgain.html");
                <?php
                    $serverName = "localhost";
                    $username ="root";
                    $password ="";
                    $dbName = "pixxel";
                        
                        $conn = mysqli_connect($serverName, $username, $password, $dbName);
                        
                        if($conn-> connect_error){
                            echo "<script>('Connection error')</script>";
                            die('');
                        }

                    $sql = ""

                
                ?>
            }
        };

        setTimeout(countdown, 1000);

        let a = Math.floor(Math.random() * (100 - 1)) + 1;
        let b = Math.floor(Math.random() * (100 - 1)) + 1
        let c = a + b;
        document.getElementById("fvalue").innerHTML = a;
        document.getElementById("svalue").innerHTML = b;


        let d;
        let score = 0;
        document.getElementById("score").innerHTML = score;


        function getInputValue(){

            // Selecting the input element and get its value 

           
            inputVal = document.getElementById("myInput").value;
            d = inputVal
            
            if(d == c){
                console.log("Correct");    
                score += 10;
            }
            else{
                console.log("Incorrect"); 
                score -= 5;
            }

            document.getElementById("score").innerHTML = score;
            a = Math.floor(Math.random() * (100 - 1)) + 1;
            b = Math.floor(Math.random() * (100 - 1)) + 1;
            document.getElementById("fvalue").innerHTML = a;
            document.getElementById("svalue").innerHTML = b;
            c = a + b;





            }
            




    </script>
</body>
</html>