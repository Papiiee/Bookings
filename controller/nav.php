<?php
echo '
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#" style="font-family:\'Rancho\', serif;">Welcome '.$userName.'</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="client_page.php" style="font-family:\'Rancho\', serif;"> <i style="color:yellow;" class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
            </li>';


if ($showItems == 1) {
}

            if($userRole == 1) {
                if ($showItems == 1) {
                    echo '<li class="nav-item">
                    <a class="nav-link" href="events.php" style="font-family:\'Rancho\', serif;"><i style="color:pink;class="fas fa-arrow-circle-right"></i>Admin Portal</a>
                    </li>';
                }
            }

if($userRole == 1) {
    if ($showEdit == 1) {
        echo '<li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#admin" style="font-family:\'Rancho\', serif;"><i style="color:yellow;" class="fa fa-plus"></i>Add Event</a>
                    </li>';
    }
}


echo '
        </ul>
        <div class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family:\'Rancho\', serif;">
                        '.$userName.'
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="../logout.php" style="font-family:\'Rancho\', serif;"><i style="color:yellow;" class="fas fa-sign-out-alt"></i> Log Out</a>

                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav> ';

?>