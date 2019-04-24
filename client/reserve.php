<?php

//about the booking
if (isset($_POST['reserveTicket'])) {

    $vipNo = $_POST['numberOfVip'];

    $regularNo = $_POST['numberOfRegular'];

    $ticketID = $_POST['ticketID'];

    $vipPrice = $_POST['vipPrice'];

    $regularPrice = $_POST['regularPrice'];


    $totalVip = (int)$vipNo * (int)$vipPrice;

    $totalRegular = (int)$regularNo * (int)$regularPrice;

    $totalPrice = $totalVip + $totalRegular;


    $query = "INSERT into reservations(event_id, user_id, vip_type, regular_type, total_price) VALUES(?, ?, ?, ?, ?)";

    $statement = $connect->prepare($query);

    $statement->bind_param('iiiii', $ticketID, $userID, $vipNo, $regularNo, $totalPrice);

    if ($statement->execute()) {

        echo '<div style="border-radius:3px;color: #ffffff;background-color: green;padding:6px;">Ticket successfully reserved </div>';

    } else {

        $error = "There was a problem ";

        echo "<div style='border-radius:3px;color: #ffffff;background-color: red;padding:6px;'>" . $error . "</div>";

    }

}

?>