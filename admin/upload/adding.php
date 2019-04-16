<?php
require_once 'connect/database.php';

class Images
{
public function saveItem($eventDetails, $images = null)
{
$name= $eventDetails['name'];
$tickets_available = $eventDetails['tickets_available'];
$tickets_remaining = $eventDetails['tickets_remaining'];
$images = $eventDetails['images'];
$attendees_type_id = $eventDetails['attendees_type_id'];
$users_id= $eventDetails['users_id'];




try {
$sql = "INSERT INTO events(event_name, tickets_available, tickets_remaining,images,attendees_type_id)
VALUES ('$image_location', '$item_name', '$item_price', $item_count)";
$stmt = mysqli_prepare(
$this->conn, $sql
);
if (mysqli_stmt_execute($stmt)) {
return true;
} else {
return false;
}
} catch (mysqli_sql_exception $ex) {
echo $ex->getMessage();
}
}
public function getAllItems()
{
$sql = "SELECT id, image_location, item_name, item_price, item_count FROM items
WHERE deleted_at IS NULL OR deleted_at = ''";
$stmt = mysqli_prepare($this->conn, $sql);
if (mysqli_stmt_execute($stmt)) {
mysqli_stmt_bind_result($stmt, $id, $img_location, $item_name, $item_price, $item_count);
while (mysqli_stmt_fetch($stmt)) {
$items[] = ['id' => $id, 'img_location' => $img_location, 'item_name' => $item_name, 'item_price' => $item_price, 'item_count' => $item_count];
}
if (empty($items)) {
return false;
} else {
return $items;
}
}
}
}
?>