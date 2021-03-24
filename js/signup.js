
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

function signupvalidate() {
    //validate first name
     var first = document.signup.firstname.value;
     if(!first || first.length === 0 || /^\s*$/.test(first)) {
       alert("Enter Firstname");
       return false;
     }
     //validate last name
     var last = document.signup.firstname.value;
     if(!last || last.length === 0 || /^\s*$/.test(last)) {
       alert("Enter Lastname");
       return false;
     }
     //validate address
     var add = document.signup.firstname.value;
     if(!add || add.length === 0 || /^\s*$/.test(add)) {
       alert("Enter Address");
       return false;
     }
     //validate city
     var city = document.signup.city.value;
     if(!city || city.length === 0 || /^\s*$/.test(city)) {
       alert("Enter City");
       return false;
     }
     //validate district
     var dis = document.signup.district.value;
     if(!dis || dis.length === 0 || /^\s*$/.test(dis)) {
       alert("Enter District");
       return false;
     }
     //validate state
     var state = document.signup.state.value;
     if(!state || state.length === 0 || /^\s*$/.test(state)) {
       alert("Enter State");
       return false;
     }
     //validate mobile number
     var phone = document.signup.phone.value;
     var numbers = /^[0-9]+$/;
     if(!phone || phone.trim().length < 10 || phone.trim().length > 10 || /^\s*$/.test(phone) || !phone.trim().match(numbers)) {
       alert("Enter correct Mobile number");
       return false;
     } 
     //validate pincode
     var pin = document.signup.pincode.value;
     var numbers = /^[0-9]+$/;
     if(!pin || pin.trim().length < 6 || pin.trim().length > 6 || /^\s*$/.test(pin) || !pin.trim().match(numbers)) {
       alert("Enter correct Pin code");
       return false;
     } 
   //validate email id
   var x = document.signup.email.value;
   var atpos = x.indexOf("@");
   var dotpos = x.lastIndexOf(".");
   if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
     alert("Enter proper email id");
     return false;
   }
   //validate password
   var p = document.signup.pwd1.value;
   var p2 = document.signup.pwd2.value;
   var Letters = /^[0-9a-zA-Z]+$/;

    if(!p || p.length === 0 || /^\s*$/.test(p)) {
      alert("Enter password");
      return false;
    }
    if (p.length < 8 || !p.match(Letters) || !p.match(numbers)){
        alert('Condition not satisfied for password');
        return false;
    }
    if (p != p2) {
        alert("Password doesn't match");
        return false;
    }
   //validate role
   if (!document.getElementById('farmer').checked && !document.getElementById('customer').checked && !document.getElementById('expert').checked) {
     alert("Select your role");
     return false;
    }
 return true;
 }
 