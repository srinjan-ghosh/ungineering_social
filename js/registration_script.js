document.getElementById("submit").onclick=function(){
    var pass1 = document.getElementById("fpassword").value;
    var pass2 = document.getElementById("cfpassword").value;
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    if(name == ""){
        alert ("name text field must be filled");
        return false;
    }
    else if(email ==""){
        alert ("email text field must be field");
        return false;
    }
    else if(pass1 ==""){
        alert ("password field must be filled");
        return false;
    }
    else if(pass2 ==""){
        alert ("confirm password field must be field");
        return false;
    }    
    else if(pass1 !=pass2){
        alert ("enter correct password");
        return false;
    }
    else {
        return true;
    }
}
