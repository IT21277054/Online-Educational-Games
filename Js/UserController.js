const toggleButton = document.querySelector('#btn');
const signUp = document.querySelector('#signUp');
const signIn = document.querySelector('#signIn');
const signUpForm = document.querySelector('.SignUp-Input-feild');
const signInForm = document.querySelector('.SignIn-Input-feild');
const chkBox = document.getElementById('chkbox');
const submitButton = document.getElementById('submitBtn');

window.addEventListener("beforeunload", () => {
    //your code goes here on location change 
    chkBox.checked = false;
});

function enable() {

    if (chkBox.checked) {
        submitButton.disabled = this.checked;
    } else {
        submitButton.disabled = !this.checked;
    }

}

signUp.addEventListener('click', () => {
    toggleButton.style.left = "0px";
    signUp.style.color = "white";
    signIn.style.color = "black";
    signIn.style.transition = "0.8s";
    signUpForm.style.transition = "1s";
    signUpForm.style.left = "12px";
    signInForm.style.left = "12px";
    signInForm.style.opacity = "0";
    signUpForm.style.opacity = "0.95";
    chkBox.checked = false;
    document.title = "Sign Up";
});

signIn.addEventListener('click', () => {
    toggleButton.style.left = "150px";
    signIn.style.color = "white";
    signUp.style.color = "black";
    signUp.style.transition = "0.8s"
    signUpForm.style.transition = "1s";
    signUpForm.style.left = "-500px";
    signInForm.style.left = "-500px";
    signUpForm.style.opacity = "0";
    signInForm.style.opacity = "0.95";
    document.title = 'Sign In';
});



