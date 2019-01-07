document.getElementById("submit").onclick=function(){
    var pass = document.getElementById("fpassword").value;
    var email = document.getElementById("femail").value;
    if(email == ""){
        alert ("email text field must be filled");
        return false;
    }
    else if(pass ==""){
        alert ("password text field must be field");
        return false;
    }
    else {
        return true;
    }
    
}
