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
            let lscore = score;
            console.log(lscore);
            var xhr = new XMLHttpRequest();
            xhr.open("GET", '/Online-Educational-Games/Php/Sonicscore.php?score=' + lscore , true);
            xhr.setRequestHeader('Content-Type', 'application/json');
            xhr.send(JSON.stringify({
                finalscore: lscore
            }));
            window.location.replace("../Html/StartGameMario.html");

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