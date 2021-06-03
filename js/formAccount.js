var loginForm = document.getElementById("loginForm");
var registerForm = document.getElementById("registerForm");
var indicator = document.getElementById("indicator");

function login() {
    registerForm.style.transform = "translateX(300px)";
    loginForm.style.transform = "translateX(300px)";
    indicator.style.transform = "translateX(0px)";
}

function register() {
    registerForm.style.transform = "translateX(0px)";
    loginForm.style.transform = "translateX(0px)";
    indicator.style.transform = "translateX(100px)";
}


