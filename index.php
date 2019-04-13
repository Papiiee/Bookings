<?php
include_once 'connect/database.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title> Churchill Show </title>
    <link rel="stylesheet" href="./css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Bad+Script|Cormorant+Garamond|Rancho|Fredericka+the+Great|Handlee|Homemade+Apple|Philosopher|Playfair+Display+SC|Reenie+Beanie|Unna|Zilla+Slab" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: darkgrey">
    <a class="navbar-brand" href="#" style="font-family:'Fredericka the Great', cursive;">The Churchill Show </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php" style="font-family:'Rancho', serif;"><i style="color:yellow" class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="client/client_page.php" style="font-family: 'Rancho', cursive;"><i style="color:yellow" class="fas fa-book-open"></i> Reservations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin/admin_page.php" style="font-family: 'Rancho', cursive;"><i style="color:yellow" class="fas fa-phone-square"></i>Admin </a>
            </li>
            <li class="nav-item dropdown" style="float: right;">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family: 'Tangerine', cursive;">
                    Join Us!
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#" style="font-family:'Rancho', serif;"data-toggle="modal" data-target="#signup">Sign Up</a>
                    <a class="dropdown-item" href="#" style="font-family:'Rancho', serif;" data-toggle="modal" data-target="#login">Log In</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<?php
session_start();
require_once('auth/auth.php');
$signup_user = new Authentications();
if ($signup_user->is_signed_in()) {
    if ($_SESSION['user_type'] == 1) {
        $signup_user->redirect('../admin/admin_page.php');
    } else {
        $signup_user->redirect('../client/client_page.php');
    }
}
$full_name = $email = $password = $confirm_password = $modal_error = "";
$full_name_err = $email_err = $password_err = $confirm_password_err = $modal_err = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate Modal
    if (
        empty(trim($_POST["full_name"]))
        && empty(trim($_POST["email"]))
        && empty(trim($_POST["password"]))
        && empty(trim($_POST["confirm_password"]))
    ) {
        $modal_error = "Please fill in the required details before submitting.";
    }
    // Validate Password
    if (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Your password must have at least 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Passwords do not match.";
        }
    }
    // If no errors submit form
    if (
        empty($full_name_err) &&
        empty($email_err) &&
        empty($password_err) &&
        empty($confirm_password_err)
    ) {
        $email = $_POST["email"];
        $statement = $signup_user->runQuery("SELECT * FROM users WHERE email = '$email'");
        mysqli_stmt_execute($statement);
        mysqli_stmt_store_result($statement);
        if (mysqli_stmt_num_rows($statement) == 1) {
            $email_err = "This user email provided already exists.";
        } else {
            $full_name = trim($_POST["full_name"]);
            $email = trim($_POST["email"]);
            $password = password_hash(trim($_POST["password"]), PASSWORD_DEFAULT);

            if ($signup_user->signup($full_name,$email,$password,$confirm_password,$role = 2)){
                $signup_user->redirect("client/client_page.php");
            }else{
                $modal_err = "Please check your details are correct";
            }
        }
    }
}
?>
<!-- Modal -->
<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sign Up </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="index.php" method="post">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Fullname</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Sign up &rarr;</button>
            </div>
        </div>
    </div>
</div>


<?php

require_once 'auth/auth.php';

$signedin_user = new Authentications();
if ($signedin_user->is_signed_in()) {
    if ($_SESSION['roles_id'] == 1) {
        $signedin_user->redirect('../admin/admin_page.php');
    } else {
        $signedin_user->redirect('../client/client_page.php');
    }
}
$email = $password = "";
$roles_id = null;
$email_err = $password_err = $modal_err = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if email and password are empty
    if (empty(trim($_POST["email"]))) {
        $email_err = "Kindly provide an email to proceed.";
    } else {
        $email = trim($_POST["email"]);
    }
    if (empty(trim($_POST["password"]))) {
        $password_err = "Kindly enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }
    // Validate credentials on database
    if (empty($email_err) && empty($password_err)) {
        if ($signedin_user->signin($email, $password)) {
            if ($_SESSION['roles_id'] == 1) {
                // admin/ events manager
                $signedin_user->redirect('../admin/admin_page.php');
            } elseif ($_SESSION['roles_id'] == 2) {
                // client
                $signedin_user->redirect('../client/client_page.php');
            }
        }else{
            $modal_err = "Please check your details are correct";
        }
    }
}
?>

<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sign In </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Login &rarr;</button>
            </div>
        </div>
    </div>
</div>




<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div style="height: 800px;background-repeat:no-repeat;background-position: center;background-size: cover;opacity:10;background-image: url('./images/p3.jpg');">

            </div>
        </div>
        <div class="carousel-item">
            <div style="height: 800px;background-repeat:no-repeat;background-position: center;background-size: cover;opacity:10;background-image: url('./images/p9.jpg');">

            </div>
        </div>
        <div class="carousel-item">
            <div style="height: 800px;background-repeat:no-repeat;background-position: center;background-size: cover;opacity:10;background-image: url('./images/p1.jpg');">

            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container">
    <br/> <br/><h2 style="color:yellow;font-family:'Homemade Apple', cursive;"> What's new?</h2>

    <div class="row">
        <h4 style="font-family:'Philosopher', sans-serif;">Cities we may visit over the year</h4>

    </div>

    <div class="row">
        <div class="col-md-6 col-sm-12" style="padding: 20px;">
            <div class="" style="width:100%;height: 400px;margin:1px;background-repeat:no-repeat;-webkit-border-radius: 22px;-moz-border-radius: 22px;border-radius: 22px;background-size: cover;background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('./images/coast.jpg');">
                <br><br><br><br/><b><h3 style="font-family: 'Cormorant Garamond', serif;color:white;float:left;"> May 28th,2019</h3></b>
                <br/><br/><b><h2 style="font-family: 'Cormorant Garamond', serif;color: white;float:left;">Malindi</h2></b>
                <br/><br/><br/><b><h4 style="font-family: 'Cormorant Garamond', serif;color: white;float:left;"> Night Concert </h4></b>
            </div>
        </div>
        <div class="col-md-6 col-sm-12" style="padding: 20px;">
            <div class="" style="width:100%;height: 400px;margin:1px;background-repeat:no-repeat;-webkit-border-radius: 22px;-moz-border-radius: 22px;border-radius: 22px;background-size: cover;background-image:  linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('./images/nakuru.jpg');">
                <br><br><br/><b><h4 style="font-family: 'Cormorant Garamond', serif;color:white;float:left;"> July 28th,2019</h4></b>
                <br/><br/><b><h2 style="font-family: 'Cormorant Garamond', serif;color: white"> Nakuru </h2></b>
                <br/><br/><br/><b><h4 style="font-family: 'Cormorant Garamond', serif;color: white;float:left;"> Youth Mentorship Program & Concert</h4></b>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-12" style="padding: 20px;">
            <div style="width:100%;height: 400px;margin:1px;background-repeat:no-repeat;-webkit-border-radius: 22px;-moz-border-radius: 22px;border-radius: 22px;background-size: cover;background-image:  linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('./images/p31.jpg');">
                <br><br><br/><b><b><h4 style="font-family: 'Cormorant Garamond', serif;color:white;float:left;"> September 27th-28th,2019 </h4></b></b>
                <br/><br/><b><b><h2 style="font-family: 'Cormorant Garamond', serif;color: white;float:left;"> Newyork City </h2></b></b>
                <br/><br/><br/><b><b><h4 style="font-family: 'Cormorant Garamond', serif;color: white;float:left;"> World's Comedian Conference </h4></b></b>
            </div>
        </div>
        <div class="col-md-6 col-sm-12" style="padding: 20px;">
            <div style="width:100%;height: 400px;margin:1px;background-repeat:no-repeat;-webkit-border-radius: 22px;-moz-border-radius: 22px;border-radius: 22px;background-size: cover;background-image:  linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('./images/texas.jpg');">
                <br><br><br/><b> <h4 style="font-family: 'Cormorant Garamond', serif;color:white;float:left;"> October 16th,2019 </h4></b>
                <br/><br/><b> <h2 style="font-family: 'Cormorant Garamond', serif;color: white;float:left;"> Houston Texas </h2></b>
                <br/><br/><br/><b><h4 style="font-family: 'Cormorant Garamond', serif;color: white;float:left;">Invitation to Nickelodeon Kids' Choice Awards </h4></b>
            </div>
        </div>
    </div>

    <br/> <br/> <br/>



    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12" style="padding: 20px;">
                <div class="" style="width:100%;height: 400px;margin:1px;background-repeat:no-repeat;background-size: cover;background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('./images/p4.jpg');">
                    <br/><br/><br/><br/><br/><br/><br/><br/>
                    <b><h2 style="font-family:'Homemade Apple', cursive;color: white;display:flex;"> Find Your Happy Place</h2></b>
                    <b><h3 style="font-family:'Homemade Apple', cursive;color:white;display:flex;"> No worries, No regrets, just Pure Happiness!! </h3></b>

                </div>
            </div>

        </div>
    </div>
</body>
</html>