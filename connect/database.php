<?php

error_reporting(0);
$host = 'localhost';
$username = 'homestead';
$password = 'secret';
$database = 'Bookings';

$db = new mysqli($host, $username, $password, $database);

if($db->connect(localhost,homestead,secret,Bookings)) {

    echo "success";

} else {

  die("Wrong Credentials");

}

?>