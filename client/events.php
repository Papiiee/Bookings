<?php

require_once '../connect/database.php';

$database = new Database();

$connect = $database->connection();

$showItems = 0;

$showEdit = 1;

include_once '../controller/controller.php';

if (!isset($_SESSION['user'])) {

    header('Location: /');

}

if (isset($_POST['removeEvent'])) {

    $removeID = $_POST['deleteId'];

    $date = date('Y-m-d G:i:s');

    $deleteRecord = $connect->prepare("UPDATE events SET deleted_at=? WHERE id=?");

    $deleteRecord->bind_param('si', $date, $removeID);

    $statement = $deleteRecord->execute();

    if ($statement) {

        header('Location: events.php');

    } else {

        die($statement);
    }

}

if (isset($_POST['unDelete'])) {

    $removeID = $_POST['deleteId'];

    $date = NULL;

    $deleteRecord = $connect->prepare("UPDATE events SET deleted_at=? WHERE id=?");

    $deleteRecord->bind_param('si', $date, $removeID);

    $statement = $deleteRecord->execute();

    if ($statement) {

        header('Location: events.php');

    } else {

        die($statement);
    }

}


if (isset($_POST['saveEvent'])) {

    $eventname = $_POST['eventName'];

    $vipTickets = $_POST['vipTickets'];

    $regularTickets = $_POST['regularTickets'];

    $vipPrice = $_POST['vipPrice'];

    $regularPrice = $_POST['regularPrice'];

    $eventDate = $_POST['eventDate'];

    $location = $_POST['location'];

    $name = $_FILES['images']['name'];

    $tempName = explode(".", $name);

    $newName = round(microtime(true)) . '.' . end($tempName);

    $folder = "../images/";

    if (!file_exists($folder)) {

        mkdir($folder, 0777, true);

    }

    $file = $folder . basename($newName);

    $fileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));

    $extensions = array("jpg", "JPG", "jpeg", "JPEG", "png", "PNG");

    if (in_array($fileType, $extensions)) {

        $query = "INSERT into events(event_name, vip_tickets, regular_tickets, vip_price, regular_price, event_date, location, images) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";

        $statement = $connect->prepare($query);

        $statement->bind_param('siiiisss', $eventname, $vipTickets, $regularTickets, $vipPrice, $regularPrice, $eventDate, $location, $newName);

        if ($statement->execute()) {

            // Move Image to Folder
            move_uploaded_file($_FILES['images']['tmp_name'], $folder . $newName);

            echo "Event Successfully Added";

        } else {

            die('There was a problem');
        }
    }

}


if (isset($_POST['updateEvent'])) {

    $eventName = $_POST['eventName'];

    $vipTickets = $_POST['vipTickets'];

    $regularTickets = $_POST['regularTickets'];

    $vipPrice = $_POST['vipPrice'];

    $regularPrice = $_POST['regularPrice'];

    $eventDate =$_POST['eventDate'];

    $location =$_POST['location'];

    $id = $_POST['updateID'];

    $name = $_FILES['images']['name'];


    if ($name == '') {

        $updateRecord = $connect->prepare("UPDATE events SET event_name=?, vip_tickets=?, regular_tickets=?, vip_price=?, regular_price=?, event_date=?, location=? WHERE id=?");

        $updateRecord->bind_param('siiiissi', $eventName, $vipTickets, $regularTickets, $vipPrice, $regularPrice, $eventDate, $location, $id);

        $statement = $updateRecord->execute();

        if ($statement) {

            header('Location: events.php');

        } else {

            die($statement);
        }

    } else {

        $tempName = explode(".", $name);

        $newName = round(microtime(true)) . '.' . end($tempName);

        $folder = "../images/";

        if (!file_exists($folder)) {

            mkdir($folder, 0777, true);

        }

        $file = $folder . basename($newName);

        $fileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));

        $extensions = array("jpg", "JPG", "jpeg", "JPEG", "png", "PNG");

        if (in_array($fileType, $extensions)) {


            $updateRecord = $connect->prepare("UPDATE events SET event_name=?, vip_tickets=?, regular_tickets=?, vip_price=?, regular_price=?, event_date=?, location=?, images=? WHERE id=?");

            $updateRecord->bind_param('siiiisssi', $eventname, $vipTickets, $regularTickets, $vipPrice, $regularPrice, $eventdate, $location, $newName, $id);

            $statement = $updateRecord->execute();

            if ($statement) {

                // Move Image to Folder
                move_uploaded_file($_FILES['images']['tmp_name'], $folder . $newName);
                header('Location: events.php');

            } else {

                die($statement);
            }

        }
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Bad+Script|Amiri|Dancing+Script|Indie+Flower|Nanum+Myeongjo|Pacifico|Cormorant+Garamond|Rancho|Fredericka+the+Great|Handlee|Homemade+Apple|Philosopher|Playfair+Display+SC|Reenie+Beanie|Unna|Zilla+Slab" rel="stylesheet">
</head>
<body>

<?php include_once('../controller/nav.php') ?>


<div class="container">
    <br/>
    <h2 style="font-family:'Rancho', serif;"><i class="fa fa-list" style="color:yellow;"></i> Our Event Details</h2>
    <br>
    <div class="row">

        <?php

        foreach ($cards as $key => $event) {

            $name = $event['event_name'];

            $picture = $event['images'];

            $id = $event['id'];

            $number = $event['vip_tickets'] + $event['regular_tickets'];

            $eventdate = $event['event_date'];

            $location = $event['location'];

            $status = $event['deleted_at'];

            if ($userRole == 1) {

                include('../controller/action.php');

            } else if ($userRole == 2 && $status == NULL) {

                include('../controller/action.php');

            }
        }

        ?>

    </div>

    <!--modal for adding events -->

    <div class="modal fade" id="admin" tabindex="-1" role="dialog" style="font-family: 'Amiri', serif;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Events</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="font-family:'Rancho', serif;">
                    <form enctype="multipart/form-data" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Event Name</label>
                            <input type="text" class="form-control" required name="eventName" placeholder="event Name">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Date</label>
                            <input type="date" class="form-control" required name="eventDate" placeholder="event Date">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Location</label>
                            <input type="text" class="form-control" required name="location" placeholder="location">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Tickets Available</label>

                            <div class="row">
                                <div class="col">
                                    <input type="number" min="1" class="form-control" name="vipTickets" placeholder="VIP Tickets">
                                </div>
                                <div class="col">
                                    <input type="number" min="1" class="form-control" name="regularTickets" placeholder="Regular Tickets">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Ticket Price</label>

                            <div class="row">
                                <div class="col">
                                    <input type="number" min="1" class="form-control" name="vipPrice" placeholder="VIP Price">
                                </div>
                                <div class="col">
                                    <input type="number" min="1" class="form-control" name="regularPrice" placeholder="Regular Price">
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" required name="images">
                                <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02" style="font-family:'Rancho', serif;">Event Banner</label>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="saveEvent" class="btn btn-primary">Add Event</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/events.js" type="text/javascript"></script>

</body>
</html>

