<DOCTYPE html>
    <!DOCTYPE html>
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


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#" style="font-family:'Homemade Apple', cursive;">Welcome!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="client_page.php" style="font-family:'Rancho', serif;"> <i style="color:pink;" class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php"style="font-family:'Rancho', serif;"><i style="color:pink";></i>About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../index.php"style="font-family:'Rancho', serif;"><i style="color:dimgrey";class="fab fa-accessible-icon"></i>Log out</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="font-family:'Rancho', serif;">Search</button>
            </form>
        </div>
    </nav>


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
                <div class="col-md-6 col-sm-12" style="padding: 20px;">
                    <div class="" style="width:100%;height: 400px;margin:1px;background-repeat:no-repeat;-webkit-border-radius: 50px;-moz-border-radius: 50px;border-radius: 50px;background-size: cover;background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('../images/p7.jpg');">
                        <br/><br/><br/><b><h1 style="font-family:'Dancing Script', cursive;color: white;float:left;"> Live Chronicle show!</h1></b>
                        <br/><br/><br/><br/><br/><br/><br/>
                        <a href="../client/events.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="opacity: 0.6;">View more details</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12" style="padding: 20px;">
                    <div class="" style="width:100%;height: 400px;margin:1px;background-repeat:no-repeat;-webkit-border-radius: 50px;-moz-border-radius: 50px;border-radius: 50px;background-size: cover;background-image:  linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('../images/p47.jpg');">
                        <br/><br/><br/><b><h1 style="font-family: 'Dancing Script', cursive;color: white;float:left;"> Night Concert!</h1></b>
                        <br/><br/><br/><br/><br/><br/><br/>
                        <a href="../client/events.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="opacity: 0.6;">View more details</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12" style="padding: 20px;">
                    <div style="width:100%;height: 400px;margin:1px;background-repeat:no-repeat;-webkit-border-radius: 50px;-moz-border-radius: 50px;border-radius: 50px;background-size: cover;background-image:  linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('../images/p22.jpg');">
                        <br/><br/><br/><b><b><h1 style="font-family:'Dancing Script', cursive; color: white;float:left;">The Eat Out! </h1></b></b>
                        <br/><br/>br/><br/><br/><br/><br/>
                        <a href="../client/events.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="opacity: 0.6;">View more details</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12" style="padding: 20px;">
                    <div style="width:100%;height: 400px;margin:1px;background-repeat:no-repeat;-webkit-border-radius: 50px;-moz-border-radius: 50px;border-radius: 50px;background-size: cover;background-image:  linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('../images/p44.jpg');">
                        <br/><br/><br/><b><h1 style="font-family:'Dancing Script', cursive;color: white;float:left;">Kids' Festival!</h1></b>
                        <br/><br/>br/><br/><br/><br/><br/>
                        <a href="../client/events.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="opacity: 0.6;"> View more details</a>
                    </div>
                </div>
            </div>

            <br/> <br/> <br/>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12" style="padding: 20px;">
                        <div class="" style="width:100%;height: 700px;margin:1px;background-repeat:no-repeat;opacity:10;background-size: cover;background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),url('../images/p45.jpg');">
                            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                            <b><h2 style="color: white;font-family: 'Pacifico', cursive;"> Churchill Show turns 16 years!</h2></b>
                            <b><h3 style="color:white;font-family: 'Cormorant Garamond', serif;">Join us as we celebrate 16 yrs at Amani Tiwi Hotel, Diani this year!</h3></b>


                        </div>
                    </div>

                </div>
            </div>
            <br/><br/>
            <div class="container">
                <div style="color: deepskyblue;font-family: 'Pacifico', cursive;"><h1>More...</h1></div>
                <br/><br/>
                <div class="row">
                    <div class="col-sm">
                        <div style="height: 400px;width:100%;border-radius:20px;background-repeat:no-repeat;background-size: cover;opacity:10;float:left;background-image: url('../images/p25.jpg');">
                            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                        <b><h3 style="font-family:'Dancing Script', cursive;color: white;">Share drinks with friends at the carnival! </h3></b>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div style="height: 400px;width:100%;border-radius:20px;background-repeat:no-repeat;background-size: cover;opacity:10;float:left;background-image: url('../images/p23.jpg');">
                            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                        <b><h3 style="font-family:'Dancing Script', cursive;color: white;"> Enjoy Food too here at Carnival!</h3></b>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div style="height: 400px;width:100%;border-radius:20px;background-repeat:no-repeat;background-size: cover;opacity:10;float:left;background-image: url('../images/p26.jpg');">
                            <br/><br/><br/><br/>
                        <b><h3 style="font-family:'Dancing Script', cursive;color: slategrey;"> Thanking our supportive sponsors,Coke!</h3></b>
                        </div>
                    </div>
                </div>
            </div>




    </body>
    </html>