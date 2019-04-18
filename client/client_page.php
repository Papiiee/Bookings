<?php
include_once '../connect/database.php';
include_once '../controller/controller.php';
if(!isset($_SESSION['user'])) {

    header('Location: /');

}
//echo $_SERVER['REQUEST_URI'];

$showItems = 1;

$showEdit = 0;

?>

<DOCTYPE html>
    <html>
    <head>

        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Bad+Script|Dancing+Script|Indie+Flower|Pacifico|Cormorant+Garamond|Rancho|Fredericka+the+Great|Handlee|Homemade+Apple|Philosopher|Playfair+Display+SC|Reenie+Beanie|Unna|Zilla+Slab" rel="stylesheet">
    </head>
    <body>

    <?php include_once ('../controller/nav.php') ?>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">

                <div style="height: 500px;background-repeat:no-repeat;background-position: center;background-size: cover;background-image:linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('../images/p42.jpg');">

                    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                    <h2 style="font-family: 'Indie Flower', cursive;color: white">Your ideal happy place</h2>
                    <h4 style="font-family: 'Indie Flower', cursive;color:white">Something new and better for you every year</h4>
                </div>


            </div>
        </div>

        <div class="container">
            <br/> <br/><h2 style="color:yellow;font-family:'Homemade Apple', cursive;"> What's in this year?</h2>

            <div class="row">
                <h4 style="color:slategrey;font-family:'Homemade Apple', cursive;"> Upcoming Events over the year</h4>

            </div>

            <div class="row">
                <div class="col-md-6 col-sm-12" style="padding: 40px;">
                    <div class="" style="width:100%;height: 400px;margin:1px;background-repeat:no-repeat;-webkit-border-radius: 50px;-moz-border-radius: 50px;border-radius: 50px;background-size: cover;background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('../images/p7.jpg');">
                        <br/><br/><br/><b><h1 style="font-family:'Dancing Script', cursive;color: white;float:left;"> Live Chronicle show!</h1></b>
                        <br/><br/><br/><br/><br/><br/><br/>
                        <a href="../client/events.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="font-family:'Rancho', serif;opacity: 0.6;">View more details</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12" style="padding: 40px;">
                    <div class="" style="width:100%;height: 400px;margin:1px;background-repeat:no-repeat;-webkit-border-radius: 50px;-moz-border-radius: 50px;border-radius: 50px;background-size: cover;background-image:  linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('../images/p47.jpg');">
                        <br/><br/><br/><b><h1 style="font-family: 'Dancing Script', cursive;color: white;float:left;"> Night Concert!</h1></b>
                        <br/><br/><br/><br/><br/><br/><br/>
                        <a href="../client/events.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="font-family:'Rancho', serif;opacity: 0.6;">View more details</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12" style="padding: 40px;">
                    <div style="width:100%;height: 400px;margin:1px;background-repeat:no-repeat;-webkit-border-radius: 50px;-moz-border-radius: 50px;border-radius: 50px;background-size: cover;background-image:  linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('../images/p22.jpg');">
                        <br/><br/><br/><b><b><h1 style="font-family:'Dancing Script', cursive; color: white;float:left;">The Eat Out! </h1></b></b>
                        <br/><br/>br/><br/><br/><br/><br/>
                        <a href="../client/events.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="font-family:'Rancho', serif;opacity: 0.6;">View more details</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12" style="padding: 40px;">
                    <div style="width:100%;height: 400px;margin:1px;background-repeat:no-repeat;-webkit-border-radius: 50px;-moz-border-radius: 50px;border-radius: 50px;background-size: cover;background-image:  linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('../images/p44.jpg');">
                        <br/><br/><br/><b><h1 style="font-family:'Dancing Script', cursive;color: white;float:left;">Kids' Festival!</h1></b>
                        <br/><br/>br/><br/><br/><br/><br/>
                        <a href="../client/events.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="font-family:'Rancho', serif;opacity: 0.6;"> View more details</a>
                    </div>
                    <br/> <br/> <br/>
                    <div>
                    <a href="../client/events.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="font-family:'Rancho', serif;float:right;background-color: #17a2b8"><i style="background-color: dimgrey" class="fas fa-arrow-circle-right"></i>See all our upcoming events</a>
                    </div>
                </div>
            </div>
            <br/>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12" style="padding: 60px;">
                        <div class="" style="width:100%;height: 700px;margin:1px;background-repeat:no-repeat;opacity:10;background-size: cover;background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),url('../images/p45.jpg');">
                            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                            <b><h2 style="color: white;font-family: 'Pacifico', cursive;"> Churchill Show turns 16 years!</h2></b>
                            <b><h3 style="color:white;font-family: 'Cormorant Garamond', serif;">Join us as we celebrate 16 yrs at Amani Tiwi Hotel, Diani this year!</h3></b>


                        </div>
                    </div>

                </div>
            </div>
    </body>
    <footer class="page-footer font-small mdb-color lighten-3 pt-4">


        <div class="container text-center text-md-left">


            <div class="row">


                <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">


                    <h5 class="font-weight-bold text-uppercase mb-4">Footer Content</h5>
                    <p>Here you can use rows and columns here to organize your footer content.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit amet numquam iure provident voluptate esse
                        quasi, veritatis totam voluptas nostrum.</p>

                </div>


                <hr class="clearfix w-100 d-md-none">

                <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">


                    <h5 class="font-weight-bold text-uppercase mb-4">About</h5>

                    <ul class="list-unstyled">
                        <li>
                            <p>
                                <a href="#!">PROJECTS</a>
                            </p>
                        </li>
                        <li>
                            <p>
                                <a href="#!">ABOUT US</a>
                            </p>
                        </li>
                        <li>
                            <p>
                                <a href="#!">BLOG</a>
                            </p>
                        </li>
                        <li>
                            <p>
                                <a href="#!">AWARDS</a>
                            </p>
                        </li>
                    </ul>

                </div>
                <hr class="clearfix w-100 d-md-none">


                <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">


                    <h5 class="font-weight-bold text-uppercase mb-4">Address</h5>

                    <ul class="list-unstyled">
                        <li>
                            <p>
                                <i class="fas fa-home mr-3"></i> NAIROBI, NB +254, KE</p>
                        </li>
                        <li>
                            <p>
                                <i class="fas fa-envelope mr-3"></i> greystone@gmail.com</p>
                        </li>
                        <li>
                            <p>
                                <i class="fas fa-phone mr-3"></i> + 254 789 1231</p>
                        </li>
                        <li>
                            <p>
                                <i class="fas fa-print mr-3"></i> + 254 234 5672</p>
                        </li>
                    </ul>

                </div>
                <hr class="clearfix w-100 d-md-none">


                <div class="col-md-2 col-lg-2 text-center mx-auto my-4">


                    <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>


                    <a type="button" class="btn-floating btn-fb">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a type="button" class="btn-floating btn-tw">
                        <i class="fab fa-twitter"></i>
                    </a>

                    <a type="button" class="btn-floating btn-gplus">
                        <i class="fab fa-google-plus-g"></i>
                    </a>

                    <a type="button" class="btn-floating btn-dribbble">
                        <i class="fab fa-dribbble"></i>
                    </a>

                </div>


            </div>


        </div>
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
        </div>


    </footer>

    </html>