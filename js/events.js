//validating ticket booking modal
function events()
{
    //Collecting Form Inputs
    let number_of_vip_tickets = $("#numberOfVip").val();

    let number_of_regular_tickets = $("#numberOfRegular").val();

    //Response Section
    $("#event_response").html('');

    if (!number_of_vip_tickets || !number_of_regular_tickets) {
        $("#event_response").html('<div style="position:absolute;left:15px;bottom:15px;border-radius:3px;color: #ffffff;background-color: red;padding:6px;">Kindly select as desired </div>');
        $("#eventName").focus();
    }

    if(number_of_vip_tickets || number_of_regular_tickets) {

        let dataString = "number_of_vip_tickets=" + number_of_vip_tickets + "&number_of_regular_tickets=" + number_of_regular_tickets;

        $.ajax({
            type: "POST",
            url: "/client/events.php",
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