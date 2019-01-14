$(document).ready(function(){
    $("#update-form").submit(function(){
        var url="/social_media/index.php/home/dashboard_submit";
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
        alert("Data Updated Successfully!");
        $('#name-field').val(data.name);
        $('#email').val(data.email);
        $('#password').val(data.password);
        $('#college').val(data.college);
        $('#phn-no').val(data.phone_number);
    }else{
        alert(data.message);
    }
};

var onError = function(){
    alert("Something went Wrong");
};
