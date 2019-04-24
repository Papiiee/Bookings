function register() {

    //Collecting Form Inputs
    let fullname = $("#fullname").val();
    let email = $("#email").val();
    let password = $("#password").val();
    let repeat = $("#repeat_password").val();

    //Response Section
    $("#response").html('');

    //Validation of Inputs
    if (fullname === '') {

        $("#response").html('<div style="position:absolute;left:15px;bottom:15px;border-radius:3px;color: #ffffff;background-color: red;padding:6px;">Fullname is Required</div>');
        $("#fullname").focus();

    } else if (email === '') {

        $("#response").html('<div style="position:absolute;left:15px;bottom:15px;border-radius:3px;color: #ffffff;background-color: red;padding:6px;">Email is Required</div>');
        $("#email").focus();

    } else if (password === '') {

        $("#response").html('<div style="position:absolute;left:15px;bottom:15px;border-radius:3px;color: #ffffff;background-color: red;padding:6px;">Password is Required</div>');
        $("#password").focus();

    } else if (password.length < 6) {

        $("#response").html('<div style="position:absolute;left:15px;bottom:15px;border-radius:3px;color: #ffffff;background-color: red;padding:6px;">Must be more than 5 Characters</div>');
        $("#password").focus();

    } else if (repeat === '') {

        $("#response").html('<div style="position:absolute;left:15px;bottom:15px;border-radius:3px;color: #ffffff;background-color: red;padding:6px;">Please Confirm Password</div>');
        $("#repeat_password").focus();

    } else if (password != repeat) {

        $("#response").html('<div style="position:absolute;left:15px;bottom:15px;border-radius:3px;color: #ffffff;background-color: red;padding:6px;">Passwords Dont Match</div>');
        $("#repeat_password").focus();

    } else {

        var dataString = "fullname=" + fullname + "&email=" + email + "&password=" + password + "&repeat=" + repeat;

        $.ajax({
            type: "POST",
            url: "/signup.php",
            data: dataString,
            cache: false,

            beforeSend: function () {
                $("#response").html('');
                $("#response").html('<div style="position:absolute;left:15px;bottom:15px;"><i class="fa fa-spinner fa-spin"></i> Please Wait</div>');

            },

            success: function (response) {

                var response_brought = response.indexOf('response');

                if (response_brought != -1) {

                    $('#fullname').val('');
                    $('#email').val('');
                    $('#password').val('');

                } else {

                    $("#response").hide().fadeIn('fast').html(response);

                }
            },

            error: function () {
                alert("Error!!!");
            }

        });
    }
}

