<DOCTYPE html>
    <!DOCTYPE html>
    <html>
    <head>

        <link rel="stylesheet" href="./css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="./css/Assignment4.css"/>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Bad+Script|Cormorant+Garamond|Rancho|Fredericka+the+Great|Handlee|Homemade+Apple|Philosopher|Playfair+Display+SC|Reenie+Beanie|Unna|Zilla+Slab" rel="stylesheet">
    </head>
    <body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#" style="font-family:'Homemade Apple', cursive;">Welcome!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="client.php" style="font-family:'Rancho', serif;"> <i style="color:pink;" class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family:'Rancho', serif;">
                        Tickets
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ticket" style="font-family:'Rancho', serif;">Book Ticket</a>
                    </div>
                </li>
                <li class="nav-item">

                    <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal" tabindex="-1"> <i style="color:pink;"class="fas fa-phone-square"></i> </i> Contact <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php"style="font-family:'Rancho', serif;"><i style="color:dimgrey" class="fa fa-home"></i>Log out</a>
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
                    <h5 class="modal-title" style="font-family:'Rancho', serif;">BOOK TICKET </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="formGroupExampleInput"style="font-family:'Rancho', serif;">Ticket Price</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput"style="font-family:'Rancho', serif;">Number of Tickets</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
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


    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">

                <div style="height: 500px;background-repeat:no-repeat;background-position: center;background-size: cover;background-image:linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('./images/p42.jpg');">

                    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                    <h2 style="font-family:'Homemade Apple', cursive;color: white">Your ideal happy place</h2>
                    <h4 style="font-family:'Homemade Apple', cursive;color:white">View our events and other details right here</h4>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div style="height: 400px;width:100%;border-radius:20px;background-repeat:no-repeat;background-size: cover;opacity:0.7;float:left;background-image: url('./images/p8.jpg');"></div>

                    <b><p> </p></b>

                </div>
                <div class="col-sm-12">
                    <div style="height: 400px;width:100%;border-radius:20px;background-repeat:no-repeat;background-size: cover;opacity:0.7;float:left;background-image: url('./images/p7.jpg');"></div>

                    <b><p></p></b>
                </div>
                <div class="col-sm-12">
                    <div style="height: 400px;width:100%;border-radius:20px;background-repeat:no-repeat;background-size: cover;opacity:0.7;float:left;background-image: url('./images/p38.jpg');"></div>

                    <b><p></p></b>
                </div>
            </div>
        </div>







    </body>
    </html>