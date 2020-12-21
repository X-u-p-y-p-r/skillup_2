$(document).ready(function () {
    // alert(123123)

    $("#subscribe_form").submit(function () {
        let email = $("#inputEmail").val();
        let alert = $("#alert");
        if(email == '') {
            alert.text('Emty email').addClass('alert-danger').show();
            return false;
        }
    });

});