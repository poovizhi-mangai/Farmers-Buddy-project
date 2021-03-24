
var ip = document.getElementById("pwd1");
var letter = document.getElementById("letter");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
ip.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
ip.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
ip.onkeyup = function() {
  // Validate lowercase letters
  var Letter = /[a-zA-Z]/g;
  if(ip.value.match(Letter)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate numbers
  var numbers = /[0-9]/g;
  if(ip.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(ip.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

function change_pwd() {
    var p = document.changepassword.pwd.value;
    var p1 = document.changepassword.pwd1.value;
   var p2 = document.changepassword.pwd2.value;
   var Letters = /^[0-9a-zA-Z]+$/;

    if(!p || p.length === 0 || /^\s*$/.test(p)) {
      alert("Enter old password");
      return false;
    }
    if(!p1 || p1.length === 0 || /^\s*$/.test(p1)) {
        alert("Enter new password");
        return false;
      }
    if (p1.length < 8 || !p1.match(Letters) || !p1.match(numbers)){
        alert('Condition not satisfied for new password');
        return false;
    }
    if (p1 != p2) {
        alert("New Password are not same");
        return false;
    }
    return true;
}