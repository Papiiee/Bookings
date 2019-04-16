<?php


?>

<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="./css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Bad+Script|Dancing+Script|Indie+Flower|Nanum+Myeongjo|Pacifico|Cormorant+Garamond|Rancho|Fredericka+the+Great|Handlee|Homemade+Apple|Philosopher|Playfair+Display+SC|Reenie+Beanie|Unna|Zilla+Slab" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#" style="font-family: 'Dancing Script', cursive;">Reservations</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="admin_page.php" style="font-family:'Rancho', serif;"> <i style="color:deepskyblue;" class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family:'Rancho', serif;">
                    Tickets
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ticket" style="font-family:'Rancho', serif; ">Make Reservations</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../index.php"style="font-family:'Rancho', serif;"><i style="color:deepskyblue" class="fab fa-accessible-icon"></i>Log out</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="font-family:'Rancho', serif;">Search</button>
        </form>
    </div>
</nav>

<!-- Ticket Modal -->
<div class="modal" id="ticket"tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="font-family: 'Rancho', serif;">Book Ticket (s)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="formGroupExampleInput" style="font-family:'Rancho', serif;">Event Name</label>
                        <select class="custom-select" id="inputGroupSelect02">
                            <option selected>Choose...</option>
                            <option value="1" style="font-family: 'Nanum Myeongjo', serif;">Live Chronicle Show</option>
                            <option value="2" style="font-family: 'Nanum Myeongjo', serif;">Malindi Concert</option>
                            <option value="3" style="font-family: 'Nanum Myeongjo', serif;">The Eat Out</option>
                            <option value="4" style="font-family: 'Nanum Myeongjo', serif;">Kids' Festival</option>
                            <option value="5" style="font-family: 'Nanum Myeongjo', serif;">Celebrating 16 yrs</option>
                            <option value="6" style="font-family: 'Nanum Myeongjo', serif;">Mombasa Concert</option>
                            <option value="7" style="font-family: 'Nanum Myeongjo', serif;">Nakuru Concert</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput"style="font-family:'Rancho', serif;">Number of Tickets</label>
                        <select class="custom-select" id="inputGroupSelect02">
                            <option selected>Choose...</option>
                            <option value="1" style="font-family: 'Nanum Myeongjo', serif;">1</option>
                            <option value="2" style="font-family: 'Nanum Myeongjo', serif;">2</option>
                            <option value="3" style="font-family: 'Nanum Myeongjo', serif;">3</option>
                            <option value="4" style="font-family: 'Nanum Myeongjo', serif;">4</option>
                            <option value="5" style="font-family: 'Nanum Myeongjo', serif;">5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput"style="font-family:'Rancho', serif;">Ticket Price</label>
                        <select class="custom-select" id="inputGroupSelect02">
                            <option selected>Choose...</option>
                            <option value="1" style="font-family: 'Nanum Myeongjo', serif;">VIP(2500)</option>
                            <option value="2" style="font-family: 'Nanum Myeongjo', serif;">Regular(1000)</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"style="font-family:'Rancho', serif;">Close</button>
                <button type="submit" class="btn btn-primary"style="font-family:'Rancho', serif;">Done</button>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <br/> <br/><h2 style="color:yellow;font-family:'Homemade Apple', cursive;"> Our Event Details</h2>

    <div class="row">
        <h4 style="color:slategrey;font-family:'Homemade Apple', cursive;"> Upcoming Events over the year</h4>

    </div>

<!--    <div class="row">-->
<!--        <div class="col-md-6 col-sm-12" style="padding: 20px;">-->
<!--            <div class="card" style="width: 18rem;">-->
<!--                <img src="../images/p7.jpg" class="card-img-top" alt="p7.jpg">-->
<!--                <div class="card-body">-->
<!--                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-md-6 col-sm-12" style="padding: 20px;">-->
<!--            <div class="card" style="width: 18rem;">-->
<!--                <img src="../images/p47.jpg" class="card-img-top" alt="p47.jpg">-->
<!--                <div class="card-body">-->
<!--                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="row">-->
<!--        <div class="col-md-6 col-sm-12" style="padding: 20px;">-->
<!--            <div class="card" style="width: 18rem;">-->
<!--                <img src="../images/p22.jpg" class="card-img-top" alt="p22.jpg">-->
<!--                <div class="card-body">-->
<!--                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-md-6 col-sm-12" style="padding: 20px;">-->
<!--            <div class="card" style="width: 18rem;">-->
<!--                <img src="../images/p44.jpg" class="card-img-top" alt="p44.jpg">-->
<!--                <div class="card-body">-->
<!--                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <br/> <br/> <br/>-->
<!---->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12 col-sm-12" style="padding: 20px;width:100%;height: 800px;">-->
<!--                <div class="card" style="width: 18rem;">-->
<!--                    <img src="../images/p45.jpg" class="card-img-top" alt="p45.jpg">-->
<!--                    <div class="card-body">-->
<!--                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!---->













</body>
</html>
