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
    
    
    <script>
        
        const words = ["practice","evident","accord","minute","consider","Phenomenon","Rural","Incipient","Social","contrary","Humanitarianism"];
        const hint = ["a customary way of operation or behavior","clearly revealed to the mind or the senses or judgment","concurrence of opinion","infinitely or immeasurably small","deem to be","a fact or situation that is observed to exist or happen, especially one whose cause or explanation is in question.","in, relating to, or characteristic of the countryside rather than the town.","beginning to happen or develop","relating to society or its organization.","opposite in nature, direction, or meaning.","the promotion of human welfare."];
        let i = 0;
        let inputVal;
        let word;
        let score = 0;
        let tries = 3;

        console.log(word);
        function shuffle(array) {
        let currentIndex = array.length,  randomIndex;

        // While there remain elements to shuffle.
        while (currentIndex != 0) {

            // Pick a remaining element.
            randomIndex = Math.floor(Math.random() * currentIndex);
            currentIndex--;

            // And swap it with the current element.
            [array[currentIndex], array[randomIndex]] = [
            array[randomIndex], array[currentIndex]];
        }

        return array;
        }


        console.log(i)
        word = Array.from(words[i]);
        let value = console.log(words.length)

        let gword = shuffle(word);


        document.getElementById("question").innerHTML = "Align the letters to create the correct word : " + gword;
        document.getElementById("score").innerHTML = "Score : " + score;


        function getInputValue(){

            // Selecting the input element and get its value 
            inputVal = document.getElementById("myInput").value;
 

            console.log(inputVal);

            if(inputVal == words[i]){
                score += 10;
                console.log("Valid Answer");
                document.getElementById("score").innerHTML = "Score : " + score;
                i++;

            }
            else{
                
                alert("Only "+tries+" Left");
                document.getElementById("score").innerHTML = "Score : " + score;
                tries --;

                if(tries == 0){
                    window.location.replace("TryAgain.html");

                }
                
            }

            word = Array.from(words[i]);
            let value = console.log(words.length)

            let gword = shuffle(word);
            document.getElementById("question").innerHTML = "Align the letters to create the correct word : " + gword;
            
                
           }


        function getInputHint(){
            score -= 5;
            document.getElementById("score").innerHTML = "Score : " + score;
            document.getElementById("gethint").innerHTML = hint[i];

        }

    </script>

</body>
</html>