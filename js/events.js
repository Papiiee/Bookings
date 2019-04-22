//validating ticket booking modal
function events()
{
    //Collecting Form Inputs
    var number_of_vip_tickets = $("#numberOfVip").val();
    var number_of_regular_tickets = $("#numberOfRegular").val();

    //Response Section
    $("#event_response").html('');


    if (number_of_vip_tickets == '') {

        $("#event_response").html('<div style="position:absolute;left:15px;bottom:15px;border-radius:3px;color: #ffffff;background-color: red;padding:6px;">Kindly select as desired </div>');
        $("#eventName").focus();

    } else if (number_of_regular_tickets == '') {

        $("#event_response").html('<div style="position:absolute;left:15px;bottom:15px;border-radius:3px;color: #ffffff;background-color: red;padding:6px;">Select the ticket desired</div>');
        $("#ticketPrice").focus();

        var dataString = "number_of_vip_tickets=" + number_of_vip_tickets + "&number_of_regular_tickets=" + number_of_regular_tickets;


        $.ajax({
            type: "POST",
            url: "events.php",
            data: dataString,
            cache: false,

            beforeSend: function () {
                $("#event_response").html('');
                $("#event_response").html('<div style="position:absolute;left:15px;bottom:15px;"><i class="fa fa-spinner fa-spin"></i> Please Wait</div>');

            },

            success: function (response) {

                var response_brought = response.indexOf('event_response');

                if (response_brought != -1) {

                    $('#numberOfTickets').val('');
                    $('#ticketPrice').val('');

                } else {

                    $("#event_response").hide().fadeIn('fast').html(response);

                }
            }

        });
    }

}