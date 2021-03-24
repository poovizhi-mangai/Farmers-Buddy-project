function loginvalidate() {
    var x = document.login.email.value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
      alert("Enter proper email id");
      return false;
    }
    var p = document.login.pwd.value;
    if(!p || p.length === 0 || /^\s*$/.test(p)) {
      alert("Enter password");
      return false;
    }
  }

