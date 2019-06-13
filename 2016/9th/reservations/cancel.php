<?php
require_once "../common.php";

$location = "Location: http://bready.xyz/reservations/index.php?text=";

$db = get_db();

$rid = $db->real_escape_string($_GET['rid']);
$number = $db->real_escape_string($_GET['number']);
$token = $db->real_escape_string($_GET['token']);

$table = $tbls['reservations'];

$sql = "DELETE FROM $table WHERE rid='$rid' AND number='$number' AND token='$token'";
    
$db->query($sql);

if($db->affected_rows < 1 || $db->error){
    header($location . 'Your reservation was not found! Perhaps it is already gone.');
}else{
    header($location . "Reservation cancelled. We're sorry to see you go. Maybe next time!");
}

$db->close();

?>
