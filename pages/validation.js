
function validation() {


    var user = document.getElementById("name") ? document.getElementById("name").value : "";
    var email = document.getElementById("email").value;
    var pass = document.getElementById("pass").value;
    var confirmPassword = document.getElementById("conpass") ? document.getElementById("conpass").value : "";
    var mobile = document.getElementById("mobile") ? document.getElementById("mobile").value : "";


    var nameSpan = document.getElementById("username");
    var emailSpan = document.getElementById("emailid");
    var passwordSpan = document.getElementById("password");
    var confirmPasswordSpan = document.getElementById("confirmpassword");
    var mobileSpan = document.getElementById("mobileNumber");

    
    if (user === "") {
        console.log(user)
        nameSpan.innerHTML = " ** Please fill the username field";
        return false;
    } else{
        nameSpan.innerHTML ="";
    }

    if (user.length <2 ){
        nameSpan.innerHTML = " ** Username must be atleast 2 characters";
    } else{
        nameSpan.innerHTML ="";
    }
    
    if (email === "" || email == null) {
        emailSpan.innerHTML = " ** Please fill the Email";

        return false;
    } else{
        emailSpan.innerHTML ="";
    }

    if (pass === "") {
        passwordSpan.innerHTML = " ** Please fill the password field";
        return false;
    } else{
        passwordSpan.innerHTML ="";
    }

    if ((pass.length <= 5) || (pass.length > 20)) {
        passwordSpan.innerHTML = " ** Passwords lenght must be between  5 and 20";
        return false;
    } else{
        passwordSpan.innerHTML ="";
    }


    if (pass != confirmPassword) {
        confirmPasswordSpan.innerHTML = " ** Password does not match the confirm password";
        return false;
    } else{
        confirmPasswordSpan.innerHTML ="";
    }
    if(mobile === ""){
        mobileSpan.innerHTML = " ** Please fill the mobile number";
        return false;
    } else{
        mobileSpan.innerHTML ="";
    }
  


}