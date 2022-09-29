const togglePassword = () => {
    const passwordInput = document.querySelector('#user_password');
    passwordInput.type = passwordInput.type === "text" ? "password" : "text";
    
    const eyeIcon = document.querySelector('#eye');
    eyeIcon.classList.contains("d-none") ? eyeIcon.classList.remove("d-none") : eyeIcon.classList.add("d-none");
    
    const eyeIconSlash = document.querySelector('#eye-slash');
    eyeIconSlash.classList.contains("d-none") ? eyeIconSlash.classList.remove("d-none") : eyeIconSlash.classList.add("d-none");

}