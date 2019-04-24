<?php
session_start();
include_once '../connect/database.php';
$database = new Database();
$connect = $database->connection();

$email = $_SESSION['user'];

$results = $connect->query("SELECT * FROM users WHERE email='$email'");
while ($row = $results->fetch_object()) {

    $userName = $row->full_name;
    $userEmail = $row->email;
    $userPassword=$row->password;
    $userRole = $row->role_id;
    $userID = $row->id;

}

$cards = $connect->query("SELECT * FROM events");