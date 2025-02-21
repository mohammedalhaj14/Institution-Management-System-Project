function login() {
    let pass = document.getElementById("password").value;
    let email = document.getElementById("email").value;
    if (email == "" || pass=="") {
        alert("Enter a valid email or password!");
    }
};
function register() {
    let field = document.getElementById("inputField").value;
    if (field === "") {
        document.getElementById("alert").innerHTML = "Please Fill The Required Fields!";
    }
};

// Function to show the registration form and hide the login form
function showRegisterForm() {
    document.getElementById("register").style.display = "block";
    document.getElementById("login").style.display = "none";
    document.getElementById("register").style.right = "0";
    document.getElementById("login").style.right = "520px";
}

// Function to show the login form and hide the registration form
function showLoginForm() {
    document.getElementById("login").style.display = "block";
    document.getElementById("register").style.display = "none";
    document.getElementById("login").style.right = "0";
    document.getElementById("register").style.right = "-520px";
};
document.addEventListener("DOMContentLoaded", function () {
    const currentLocation = location.href;
    const menuItem = document.querySelectorAll(".nav-menu ul li a");
    const menuLength = menuItem.length;
    for (let i = 0; i < menuLength; i++) {
    if (menuItem[i].href === currentLocation) {
        menuItem[i].className = "link active";
    }
    }
});


