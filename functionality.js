// David Faulkner G00299507 GMIT Web Apps Project

// LOG-IN SETUP
// initialise logged status to undefined
var loggedStatus;

// set logout button visibility to hidden
document.getElementById("logout-button").style.visibility = "hidden";

// sign into account - functionality
function login() {
    // declare user input details for username and password
    var userInput = document.getElementById("username").value;
    var passInput = document.getElementById("password").value;

    // if input details are correct show log-in success alert and set logged status  to true
    if (userInput === "user" && passInput === "pass") {
        loggedStatus = true;
        alert("You have successfully logged in!");
        // empty username and password inputs
        var empty1 = document.getElementById("username").value = "";
        var empty2 = document.getElementById("password").value = "";
        // call loggedin() function
        loggedin();
    } else {
        // empty username and password inputs
        var empty1 = document.getElementById("username").value = "";
        var empty2 = document.getElementById("password").value = "";
        // error message if password and/or username are incorrect
        var details = document.getElementById("incorrect-login").innerHTML = "Incorrect login details, please try again";
    }
}

// edit visible buttons in navbar and show welcome message
function loggedin() {
    // set logout button to visible and the sign up and login buttons to hidden after successful login attempt
    document.getElementById("user-buttons").style.visibility = "hidden";
    document.getElementById("logout-button").style.visibility = "visible";
    document.getElementById("welcome-note").innerHTML = `Welcome! Please see product line below, and add items to cart before login and checkout.`;
}


// LOGOUT SET-UP
function logout() {
    // set logged status to false after calling logout function
    loggedStatus = false;
    // alert to say you have successfully logged out
    alert("You have logged out.");
    // set login and sign-up buttons back to visible and logout button to hidden
    document.getElementById("user-buttons").style.visibility = "visible";
    document.getElementById("logout-button").style.visibility = "hidden";
    // re-direct user to home page
    window.location = "index.php";
}


// CHECKOUT CART
function checkout() {
    // if the user is logged in set logged status to true and allow user to checkout cart
    if (loggedStatus === true) {
        window.alert("Purchase is complete!");
    } else {
        // if the user is not logged in send a reminder alert to login
        window.alert("Login before checkout.");
        // redirect user to home page
        window.location = "index.php";
    }
}


// ACCOUNT SET-UP
// initialise register details array
var signupFields = {};

// take in user details
document.addEventListener("DOMContentLoaded", function() {
    signupFields.firstName = document.getElementById("inputFirstName");
    signupFields.lastName = document.getElementById("inputLastName");
    signupFields.email = document.getElementById("inputEmail");
    signupFields.password = document.getElementById("inputPassword");
});

// initialise class user to match user details
class User {
    constructor(firstName, lastName, email){
        this.firstName = firstName;
        this.lastName = lastName;
        this.email = email;
    }
}

// send contact details
function sendContact(){
    let user = new User(firstName.value, lastName.value, email.value);
    alert(`${user.firstName} thanks for registering!`);
}



