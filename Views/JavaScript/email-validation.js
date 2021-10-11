var isValid = false;
var isChedked = document.querySelector('.checkbox').checked;

//Checkes if the email is valide
function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

//Email validation
function validate(email) {

  if (validateEmail(email) && (email[email.length - 2] + email[email.length - 1]) == "co") {
    document.getElementById("validation").innerHTML = "We are not accepting subscriptions from Colombia emails";
    isValid = false;
    getBackgroundColor()
  } else if (validateEmail(email)) {
    document.getElementById("validation").innerHTML = "";
    isValid = true;
    getBackgroundColor()
  } else if (email === "") {
    document.getElementById("validation").innerHTML = "Email address is required";
    isValid = false;
    getBackgroundColor()
  }  else {
    document.getElementById("validation").innerHTML = "Please provide a valid e-mail address";
    isValid = false;
    getBackgroundColor()
  }
}
//TOS validation
function isChecked() {
  if (!document.querySelector('.checkbox').checked) {
    document.getElementById("is-checked").innerHTML = "You must accept the terms and conditions";
    isChedked = false;
    getBackgroundColor()
  } else {
    document.getElementById("is-checked").innerHTML = "";
    isChedked = true;
    getBackgroundColor()
  }
}

//Changes the background of the validation message
function getBackgroundColor() {
  if (!isChedked || !isValid) {
  document.querySelector("#validation-message").style.background = "#FF665A";
  } else {
    document.querySelector("#validation-message").style.background = transparent;
  }
}