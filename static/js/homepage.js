$(document).ready(function () {
    $('.submit_form').submit(function() {
        var url = "homepage_submit.php";
        var data = $('.submit_form').serialize();
        $.ajax(url, {
            data: data,
            success: dataentry_success,//function
            error: on_error,//function
            type: "POST"
        });
        return false;// doesnot allow normal form submission
    });
});
var dataentry_success = function (data) {
    data = JSON.parse(data);

    if (data.success) {
        alert(data.message);
        window.location.href = "homepage.php";
    } else {
        alert(data.message);
    }
};
var on_error = function () {
    alert("something went wrong");
};
