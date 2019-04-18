<?php
error_reporting(0);
session_start();

require_once './connect/database.php';
$database = new Database();
$connect = $database->connection();


if (isset($_POST) and $_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate Form

    $event_name = trim(strip_tags($_POST["event_name"]));

    $tickets_available = trim(strip_tags($_POST["tickets_available"]));

    $images ='/images/' . trim(strip_tags($_POST["images"]));

 if (empty($event_name) || empty($tickets_available) || empty($tickets_remaining) || empty($images)) {

     $error = "Please fill in all the fields";
     echo "<div style='position:absolute;left:15px;bottom:15px;border-radius:3px;color: #ffffff;background-color: red;padding:6px;'>" . $error . "</div>";
 }
 $query = "INSERT into events(event_name, tickets_available, tickets_remaining, images) VALUES(?, ?, ?, ?)";
                        $statement = $connect->prepare($query);
                        $statement->bind_param('siis', $event_name, $tickets_available, $tickets_remaining, $images);

                        if ($statement->execute()) {

                            echo '<div style="position:absolute;left:15px;bottom:15px;border-radius:3px;color: #ffffff;background-color: green;padding:6px;">Event Added Successfully</div>';

                            $result = $connect->query("SELECT * FROM events WHERE event_name='$event_name'")->fetch_object()->event_name;

                            $_SESSION['user'] = $result;


                            echo "<script>window.location.href='client/events.php';</script>";


                        } else {

                            $error = "Event not added";
                            echo "<div style='position:absolute;left:15px;bottom:15px;border-radius:3px;color: #ffffff;background-color: red;padding:6px;'>" . $error . "</div>";

                        }

}
