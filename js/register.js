function validate(){
    //Get inputs from registration form
    const username=document.getElementById("Username");
    const email=document.getElementById("Email");
    const password=document.getElementById("password");
    const confirm_password=document.querySelector("#confirm_password");

    const usernameexp=/^[a-zA-Z0-9_-]{3,16}$/;
    const emailexp=/^[^s@]+@[^\s@]+\.[^\s@]+$/;
    const passwordexp=/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

    if(!usernameexp.test(username.value)){
        alert("Please enter a valid username.");
        return false;
    }

    if(!emailexp.test(email.value)){
        alert("Please enter a valid email address");
        return false;
    }

    if(!passwordexp.test(password.value)){
        alert("Enter a valid Password.");
        return false;
    }

    if(password.value!==confirm_password.value){
        alert("Passwords doesn't match");
        return false;
    }
    return true;
}