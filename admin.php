<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title> Management </title>
    <link rel="stylesheet" href="./css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Bad+Script|Dancing+Script|Indie+Flower|Nanum+Myeongjo|Pacifico|Cormorant+Garamond|Rancho|Fredericka+the+Great|Handlee|Homemade+Apple|Philosopher|Playfair+Display+SC|Reenie+Beanie|Unna|Zilla+Slab" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#" style="font-family:'Homemade Apple', cursive;">Management</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="admin.php"><i style="color:dimgrey" class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php"><i style="color:dimgrey" class="fa fa-home"></i>Log out</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search">
            <button type="button" class="btn btn-info"type="submit">Search</button>
        </form>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">


                    <div class="carousel-item active">
                        <div style="height: 500px;background-repeat:no-repeat;background-position: center;background-size: cover;opacity:10;background-image: url('./images/p21.jpg');">
                        </div>
                    </div>


                    <div class="carousel-item">
                        <div style="height: 500px;background-repeat:no-repeat;background-position: center;background-size: cover;opacity:10;background-image: url('./images/p20.jpg');">
                        </div>
                    </div>


                    <div class="carousel-item">
                        <div style="height: 500px;background-repeat:no-repeat;background-position: center;background-size: cover;opacity:10;background-image: url('./images/p41.jpg');">
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

        </div>
        <div class="col">
            <h2 style="color:pink"> Administrator Dashboard</h2>
            <br><br><br><br>
            <a href="#" data-toggle="modal" data-target="#ticket"class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Add Events</a>
            <br><br><br><br><br>
            <a href="#" data-toggle="modal" data-target="#ticket"class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit Events </a>
            <br><br><br><br><br>
            <a href="#" data-toggle="modal" data-target="#ticket"class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Delete Events</a>

        </div>



        <div class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Events</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </div>
        </div>














<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col-md-12 col-sm-12" style="padding: 20px;">-->
<!--            <div class="" style="width:100%;height: 500px;margin:1px;background-repeat:no-repeat;background-size: cover;background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('./images/p41.jpg');">-->
<!--                <br/><br/><br/><<br/><br/><br/><br/><br/> <br/><br/>-->
<!--                <b><h2 style="font-family:'Homemade Apple', cursive;color: white;display:flex;"> Bring forth happiness to everyone!</h2></b>-->
<!--                <b><h3 style="font-family:'Homemade Apple', cursive;color:white;display: flex;">Home is where your heart belongs!</h3></b>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    </div>-->
<!--</div>-->
<!---->
<!---->
<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col-sm">-->
<!--            <div style="height: 200px;width:100%;border-radius:20px;background-repeat:no-repeat;background-size: cover;opacity:0.7;float:left;background-image: url('./images/p9.jpg');"></div>-->
<!---->
<!--            <b><p> </p></b>-->
<!---->
<!--        </div>-->
<!--        <div class="col-sm">-->
<!--            <div style="height: 200px;width:100%;border-radius:20px;background-repeat:no-repeat;background-size: cover;opacity:0.7;float:left;background-image: url('./images/p10.jpg');"></div>-->
<!---->
<!--            <b><p></p></b>-->
<!--        </div>-->
<!--        <div class="col-sm">-->
<!--            <div style="height: 200px;width:100%;border-radius:20px;background-repeat:no-repeat;background-size: cover;opacity:0.7;float:left;background-image: url('./images/p11.jpg');"></div>-->
<!---->
<!--            <b><p></p></b>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
</body>
</html>
