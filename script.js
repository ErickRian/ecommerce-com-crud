let buttonShowPassword = document.getElementById("showPassword");
let password = document.getElementById("passwordInput");
buttonShowPassword.addEventListener("click", () => {
    if (password.type === "password") {
        password.type = "text";
    } 
    else {
        password.type = "password";
    }
});