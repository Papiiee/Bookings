function events(id) {
    //Collecting Form Inputs
    let number_of_vip_tickets = $("#numberOfVip").val();

    let number_of_regular_tickets = $("#numberOfRegular").val();

    let ticketID = $("#ticketID").val();

    let activeUserID = $("#activeUserID").val();

    let vipPrice = $("#vipPrice").val();

    let regularPrice = $("#regularPrice").val();

    //let reservation = $("#reserve").val();


    if (id == ticketID) {


        // Response Section
        $("#event_response").html('');

        if (!number_of_vip_tickets && !number_of_regular_tickets) {

            $("#event_response").html('<div style="position:absolute;left:15px;bottom:15px;border-radius:3px;color: #ffffff;background-color: red;padding:6px;">Kindly select as desired </div>');

            $("#eventName").focus();

        } else {

            let dataString = "number_of_vip_tickets=" + number_of_vip_tickets + "&number_of_regular_tickets=" + number_of_regular_tickets + "&ticketID=" + ticketID + "&activeUserID=" + activeUserID + "&vipPrice=" + vipPrice + "&regularPrice=" + regularPrice;

            $.ajax({
                type: "POST",
                url: "../client/reserve.php",
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
                        $("#ticketID").val('');
                        $("#activeUserID").val('');
                        $("#vipPrice").val('');
                        $("#regularPrice").val('');
                        //$("#reserve").val();
                    } else {

                        $("#event_response").hide().fadeIn('fast').html(response);

                    }
                }

            });
        }

    }
}