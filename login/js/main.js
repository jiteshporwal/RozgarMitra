document.getElementById("pass").addEventListener("blur", function() {
    var password = document.getElementById("pass").value;

    // Check if the password contains at least one lowercase letter, one uppercase letter, one digit, and has a minimum length of 8 characters
    var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;
    if (!regex.test(password)) {
        alert("Use a strong password (at least 8 characters with at least one lowercase letter, one uppercase letter, and one digit)");
        document.getElementById("pass").value = "";
    }
});


document.getElementById("re_pass").addEventListener("blur", function() {
    var password = document.getElementById("pass").value;
    var confirmPassword = document.getElementById("re_pass").value;
    var passwordMatch = document.getElementById("password-match");
    var submitButton = document.getElementById("signup");

    if (password === confirmPassword) {
       // passwordMatch.textContent = "Passwords match";
      // passwordMatch.style.color = "green";
        submitButton.disabled = false; // Enable the submit button
    } else {
        alert("Password do not match ");
        submitButton.disabled = true; // Disable the submit button
        document.getElementById("re_pass").value = ""; // Clear the password field
        document.getElementById("pass").value = "";
    }
});


