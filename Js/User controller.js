const overlay = document.getElementById('btn');
const signUp = document.getElementById('signUp');
const signIn = document.getElementById('signIn');


signUp.addEventListener('click', () => {
    // overlay.style.background = "linear-gradient(to right,  #009ffd,#2a2a72)";
    overlay.style.left = "0px";
    signUp.style.color = "white";
    signIn.style.color = "black";
    signIn.style.transition = "0.5s"

});

signIn.addEventListener('click', () => {
    // overlay.style.background = "linear-gradient(to right, #2a2a72, #009ffd)";
    overlay.style.left = "150px";
    signIn.style.color = "white";
    signUp.style.color = "black";
    signUp.style.transition = "0.5s"
});
