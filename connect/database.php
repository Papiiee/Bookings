<?php

error_reporting(0);
$host = '127.0.0.1';
$username = 'homestead';
$password = 'secret';
$database = 'Bookings';
$port='3306';

$db = mysqli_connect ("127.0.0.1", "homestead", "secret", "Bookings", "3306");
if(mysqli_connect_errno()) {

    echo "Failed to connect to mySQL:". mysqli_connect_error();

} else {

  echo("Connection Successful!");

}

?>