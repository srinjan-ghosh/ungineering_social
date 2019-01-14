$(document).ready(function () {
    $('#login_form').submit(function() {
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
        var url = "/social_media/index.php/login/login_submit";
        var data = $('#login_form').serialize();
        $.ajax(url, {
            data: data,
            success: login_success,
            error: on_error,
            type: "POST"
        });
        return false;
    });
});

var login_success = function (data) {
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

