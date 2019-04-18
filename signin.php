<?php
error_reporting(0);
session_start();

require_once './connect/database.php';
$database = new Database();
$connect = $database->connection();


if (isset($_POST) and $_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate Form

    $email = trim(strip_tags($_POST["email"]));

    $password = md5(trim(strip_tags($_POST["password"])));


    if (empty($email) || empty($password)) {

        $error = "Please fill in all the fields";
        echo "<div style='position:absolute;left:15px;bottom:15px;border-radius:3px;color: #ffffff;background-color: red;padding:6px;'>" . $error . "</div>";

    } else {

        $result = $connect->query("SELECT * FROM users WHERE email='$email' AND password='$password'")->fetch_object()->email;

        if($result) {

            $_SESSION['user'] = $result;

            echo "<script>window.location.href='client/client_page.php';</script>";

        } else {

            $error = "Wrong Login Credentials";
            echo "<div style='position:absolute;left:15px;bottom:15px;border-radius:3px;color: #ffffff;background-color: red;padding:6px;'>" . $error . "</div>";
            die();

        }

    }

}