<?php
require_once "../common.php";

$db = get_db();

$rid = $db->real_escape_string($_GET['rid']);
$number = $db->real_escape_string($_GET['number']);
$token = $db->real_escape_string($_GET['token']);

$table = $tbls['reservations'];

$sql = "UPDATE $table SET confirmed=1 WHERE rid='$rid' AND number='$number' AND token='$token'";
    
$db->query($sql);

$location = "Location: http://bready.xyz/reservations/index.php?text=";


if($db->affected_rows < 1 || $db->error){
    header($location . 'Your reservation was not found or is already confirmed!');
}else{
    header($location . "Reservation confirmed. See you soon!");
}

$db->close();

?>
