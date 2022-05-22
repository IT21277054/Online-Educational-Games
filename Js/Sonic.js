timeLeft = 120;

function countdown() {
    timeLeft--;
    document.getElementById("seconds").innerHTML = String( timeLeft );
    if (timeLeft > 0) {
        setTimeout(countdown, 1000);
    }
    else{
        let lscore = score;
        console.log(lscore);
        var xhr = new XMLHttpRequest();
        xhr.open("GET", '/Online-Educational-Games/Php/Sonicscore.php?score=' + lscore , true);
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.send(JSON.stringify({
            finalscore: lscore
        }));
        window.location.replace("../Html/TryAgain.html");;
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