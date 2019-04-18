function login() {

    //Collecting Form Inputs
    var email = $("#login_email").val();
    var password = $("#login_password").val();

    //Response Section
    $("#login_response").html('');

    //Validation of Inputs
     if (email == '') {

        $("#login_response").html('<div style="position:absolute;left:15px;bottom:15px;border-radius:3px;color: #ffffff;background-color: red;padding:6px;">Email is Required</div>');
        $("#login_email").focus();

    } else if (password == '') {

        $("#login_response").html('<div style="position:absolute;left:15px;bottom:15px;border-radius:3px;color: #ffffff;background-color: red;padding:6px;">Password is Required</div>');
        $("#login_password").focus();


    } else {

        var dataString = "email=" + email + "&password=" + password;


        $.ajax({
            type: "POST",
            url: "signin.php",
            data: dataString,
            cache: false,

            beforeSend: function () {
                $("#login_response").html('');
                $("#login_response").html('<div style="position:absolute;left:15px;bottom:15px;"><i class="fa fa-spinner fa-spin"></i> Please Wait</div>');

            },

            success: function (response) {

                var response_brought = response.indexOf('login_response');

                if (response_brought != -1) {

                    $('#login_email').val('');
                    $('#login_password').val('');

                } else {

                    $("#login_response").hide().fadeIn('fast').html(response);

                }
            }

        });
    }
}

