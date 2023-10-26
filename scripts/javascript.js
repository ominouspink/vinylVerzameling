
if(inloggen == "login"){
let userInput = prompt("Please enter something:");
if (userInput !== null) {
    window.location.href = "index.php?login=" + userInput;
} else {
    alert("You canceled the input.");
}}