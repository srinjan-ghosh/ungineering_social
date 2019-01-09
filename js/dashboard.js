$(document).ready(function(){
    $("#update-form").submit(function(){
        var url="dashboard_submit.php";
        var data=$('#update-form').serialize();
        $.ajax(url, {
            data:data,
            success: update_success,
            errror: onError,
            type: "POST"
        });
    return false;
    });
});

var update_success = function(data){
    data = JSON.parse(data);
    if(data.success){
        $('#name-field').val(data.name);
        $('#email').val(data.email);
        $('#password').val(data.password);
        $('#college').val(data.college);
        $('#phn-no').val(data.phone_number);
    }
}

var onError = function(){
    alert("Something went Wrong");
}