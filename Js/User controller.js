const toggleButton = document.getElementById('btn');
const signUp = document.getElementById('signUp');
const signIn = document.getElementById('signIn');
const signUpForm = document.querySelector('.SignUp-Input-feild');
const signInForm = document.querySelector('.SignIn-Input-feild');


signUp.addEventListener('click', () => {
    toggleButton.style.left = "0px";
    signUp.style.color = "white";
    signIn.style.color = "black";
    signIn.style.transition = "0.5s";
    signUpForm.style.transition = "1s";
    signUpForm.style.left = "12px";
    signInForm.style.left = "12px";
    signInForm.style.opacity = "0";
    signUpForm.style.opacity = "1";
});

signIn.addEventListener('click', () => {
    toggleButton.style.left = "150px";
    signIn.style.color = "white";
    signUp.style.color = "black";
    signUp.style.transition = "0.5s"
    signUpForm.style.transition = "1s";
    signUpForm.style.left = "-500px";
    signInForm.style.left = "-500px";
    signUpForm.style.opacity = "0";
    signInForm.style.opacity = "1";
});
