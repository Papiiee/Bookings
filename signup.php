<?php
session_start();

require_once './connect/database.php';
$database = new Database();
$connect = $database->connection();


        if (isset($_POST) and $_SERVER["REQUEST_METHOD"] == "POST") {

            // Validate Form

            $fullname = trim(strip_tags($_POST["fullname"]));

            $email = trim(strip_tags($_POST["email"]));

            $password = md5(trim(strip_tags($_POST["password"])));

            $repeat = md5(trim(strip_tags($_POST["repeat"])));

            $role = 2;


            if (empty($fullname) || empty($email) || empty($password) || empty($repeat)) {

                $error = "Please fill in all the fields";
                echo "<div style='position:absolute;left:15px;bottom:15px;border-radius:3px;color: #ffffff;background-color: red;padding:6px;'>" . $error . "</div>";

            } else
                if (strlen($password) < 6) {

                    $error = "Must have at least 6 characters.";
                    echo "<div style='position:absolute;left:15px;bottom:15px;border-radius:3px;color: #ffffff;background-color: red;padding:6px;'>" . $error . "</div>";

                } else if ($password != $repeat) {

                    $error = "Your passwords dont match";
                    echo "<div style='position:absolute;left:15px;bottom:15px;border-radius:3px;color: #ffffff;background-color: red;padding:6px;'>" . $error . "</div>";

                } else {


                    $results = $connect->query("SELECT * FROM users WHERE email='$email'");

                    $count = $results->num_rows;


                    if($count > 0) {

                        $error = "Email Address Exist";
                        echo "<div style='position:absolute;left:15px;bottom:15px;border-radius:3px;color: #ffffff;background-color: red;padding:6px;'>" . $error . "</div>";

                    } else {

                        $query = "INSERT into users(full_name, email, password, roles_id) VALUES(?, ?, ?, ?)";
                        $statement = $connect->prepare($query);
                        $statement->bind_param('sssi', $fullname, $email, $password, $role);

                        if ($statement->execute()) {

                            echo '<div style="position:absolute;left:15px;bottom:15px;border-radius:3px;color: #ffffff;background-color: green;padding:6px;">User Registered</div>';

                            $result = $connect->query("SELECT * FROM users WHERE email='$email'")->fetch_object()->email;

                                $_SESSION['user'] = $result;


                            echo "<script>window.location.href='client/client_page.php';</script>";


                        } else {

                            $error = "Email Address Exist";
                            echo "<div style='position:absolute;left:15px;bottom:15px;border-radius:3px;color: #ffffff;background-color: red;padding:6px;'>" . $error . "</div>";

                        }
                    }
                }


        }