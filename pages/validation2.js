
function validation2() {


    var email = document.getElementById("email").value;
    var pass = document.getElementById("pass").value;


    var emailSpan = document.getElementById("emailid");
    var passwordSpan = document.getElementById("password");

    
    
    if (email === "" ) {
        emailSpan.innerHTML = " ** Please fill the Email";
        return false;
    }  else{
        emailSpan.innerHTML = "";
    }

    if (pass === "") {
        passwordSpan.innerHTML = " ** Please fill the password field";
        return false;
    }  else{
        passwordSpan.innerHTML = "";
    }

    if ((pass.length <= 5) || (pass.length > 20)) {
        passwordSpan.innerHTML = " ** Passwords lenght must be between  5 and 20";
        return false;
    }  else{
        passwordSpan.innerHTML = "";
    }

  

    return true;

}