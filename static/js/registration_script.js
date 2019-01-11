$(document).ready(function () {
    $('#registration_form').submit(function() {
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
        //else {
          // return true;
         //  header("location:homepage.php");
      // }
        var url = "/social_media/index.php/login/registration_submit";
        var data = $('#registration_form').serialize();
        $.ajax(url, {
            data: data,
            success: registration_success,
            error: on_error,
            type: "POST"
        });
        return false;
    });
});

var registration_success = function (data) {
    data = JSON.parse(data);

    if (data.success) {
        alert(data.message);
        window.location.href = "/social_media/index.php/home/";
    } else {
        alert(data.message);
    }
};

var on_error = function () {
    alert("something went wrong");
};


