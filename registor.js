
 

function send(){
    //email
    var email = document.getElementById("email")
  , confirm_email = document.getElementById("confirm_email");

function validateEmail(){
  if(email.value != confirm_email.value) {
    confirm_email.setCustomValidity("email Don't Match");
  } else {
    confirm_email.setCustomValidity('');
  }
}

email.onchange = validateEmail;
confirm_email.onchange = validateEmail;
//password
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
 
}


