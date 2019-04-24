<?php
echo '<div class="col-sm-4" style="margin-bottom: 30px;font-family: \'Amiri\', serif;">

            <div class="card">
            
                <div class="card-body">
                
                    <div class="row" style="margin-bottom:20px;background-position: center;background-size:cover;background-repeat:no-repeat;background-image: URL(../images/' . $picture . '); height: 180px;">
                    
                    </div>
                    
                    <h5 class="card-title"><strong>' . $name . '</strong></h5>
                    
                    <p class="card-text"><small><i class="fas fa-clock"></i><strong>DATE: </strong>'. $eventdate .'</small></p>
                    
                    <p class="card-text"><small><i class="fas fa-map-marker-alt"></i><strong>LOCATION: </strong>'. $location .'</small></p>
                    
                    <p class="card-text"><small><strong>TOTAL TICKETS:</strong> ' . $number . '</small></p>';

if ($userRole == 1) {
    echo '
                    <a href="#" data-toggle="modal" data-target="#edit' . $id . '" style="margin-right: 10px;" class="btn btn-outline-primary"><i class="fa fa-edit"></i></a>';
}

if ($userRole == 1) {
    if ($status != "") {

        echo '<a href="#" data-toggle="modal" data-target="#unDelete' . $id . '" class="btn btn-success"><i class="fa fa-eye"></i></a>';

    } else {

        echo '<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete' . $id . '"><i class="fa fa-trash"></i></a>';

    }
}


echo '<a href="#" data-toggle="modal" data-target="#ticket' . $id . '" class="btn btn-outline-success float-right"><i class="fas fa-ticket-alt"></i> Reserve Ticket</a>
                
                </div>
                
            </div>
            
        </div>
        
        
        
<!-- Delete Modal -->
<div class="modal fade" id="delete' . $id . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-family: \'Amiri\', serif;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-trash" ></i> DELETE ' . $name . '</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        Are you sure you want to <strong>DELETE</strong> this event?<br>
        Users will not be able to reserve tickets when deleted.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form method="POST">
        <input type="hidden" value="' . $id . '" name="deleteId"/>
        <button type="submit" name="removeEvent" class="btn btn-danger">Delete Event</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Un Delete Modal -->
<div class="modal fade" id="unDelete' . $id . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-family: \'Amiri\', serif;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-eye"></i> UN DELETE ' . $name . '</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        You are about to <strong>UNDELETE</strong> this event.<br/>
        Users will be able to reserve it if there are available tickets.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
        <form method="POST">
        <input type="hidden" value="' . $id . '" name="deleteId"/>
        <button type="submit" name="unDelete" class="btn btn-success" >Undelete Event</button>
        </form>
      </div>
    </div>
  </div>
</div>';


//Reserve Tickets
echo '<div class="modal fade" id="ticket' . $id . '" tabindex="-1"  role="dialog" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"  style="font-family: \'Amiri\', serif;">
                <h5 class="modal-title"><i class="fas fa-ticket-alt" ></i> Book Ticket for ' . $name . '</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>         
                <div class="modal-body"  style="font-family:\'Cormorant Garamond\', serif;">
                   <form method="post">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Number of VIP Tickets <span style="border-radius:4px;color:#ffffff;background-color: green;padding: 5px;">' . $event['vip_price'] . '/= per Ticket</span></label>
                        <select class="custom-select" type="number" required id="numberOfVip" name="numberOfVip">
                            <option selected>Select number</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>

                     <div class="form-group">
                        <label for="formGroupExampleInput">Number of Regular Tickets <span style="border-radius:4px;color:#ffffff;background-color: green;padding: 5px;">' . $event['regular_price'] . '/= per Ticket</span></label>
                        <select class="custom-select" type="number" required id="numberOfRegular" name="numberOfRegular">
                            <option selected>Select number</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>                  
                    </div> 
                    
                    <input type="hidden" name="ticketID" value="'.$id.'" id="ticketID"/>
                    
                    <input type="hidden" name="vipPrice" value="'.$event['vip_price'].'" id="vipPrice"/>
                    
                    <input type="hidden" name="regularPrice" value="'.$event['regular_price'].'" id="regularPrice"/>    
                  

                </div>
            <div class="modal-footer"  style="font-family:\'Rancho\', serif;">
                <span id="event_response"></span>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="reserveTicket" class="btn btn-primary">Done</button>
                </form>
            </div>
            
        </div>
    </div>
</div>';

//Edit Events
echo '<div class="modal fade" id="edit' . $id . '" tabindex="-1" role="dialog" style="font-family: \'Amiri\', serif;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fa fa-edit"></i> Edit ' . $name . '</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form enctype="multipart/form-data" method="POST">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Event Name</label>
                            <input type="text" class="form-control" required name="eventName" value="' . $name . '" placeholder="Event Name">
                        </div>
                         <div class="form-group">
                            <label for="formGroupExampleInput">Date</label>
                            <input type="date" class="form-control" value="'.$eventdate.'" required name="eventDate" placeholder="event Date">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Location</label>
                            <input type="text" class="form-control" required name="location" value="'.$location.'" placeholder="location">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Tickets Available</label>
                            <div class="row">
                                <div class="col">
                                    <input type="number" value="' . $event['vip_tickets'] . '" min="1" class="form-control" name="vipTickets" placeholder="VIP Tickets">
                                </div>
                                <div class="col">
                                    <input type="number" value="' . $event['regular_tickets'] . '" min="1" class="form-control" name="regularTickets" placeholder="Regular Tickets">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Ticket Price</label>
                            <div class="row">
                                <div class="col">
                                    <input type="number" min="1" class="form-control" value="' . $event['vip_price'] . '" name="vipPrice" placeholder="VIP Price">
                                </div>
                                <div class="col">
                                    <input type="number" min="1" class="form-control" name="regularPrice" value="' . $event['regular_price'] . '" placeholder="Regular Price">
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                            <input type="hidden" name="updateID" value="' . $id . '"/>
                                <input type="file" class="custom-file-input" name="images">
                                <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02" style="font-family:"Rancho", serif;">Event Banner</label>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="updateEvent" class="btn btn-success">Update Event</button>
                    </form>
                </div>
            </div>
        </div>
    </div>';
?>