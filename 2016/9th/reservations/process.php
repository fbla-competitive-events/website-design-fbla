<?php
require_once "../common.php";

$db = get_db();

$number = $db->real_escape_string(randomStr(7,"0123456789"));
$name = $db->real_escape_string($_POST['name']);
$email = $db->real_escape_string($_POST['email']);
$phone = $db->real_escape_string($_POST['phone']);
$amt = $db->real_escape_string($_POST['guests']);
$time = $db->real_escape_string($_POST['time_process']);
$token = $db->real_escape_string(randomStr());

$table = $tbls['reservations'];
$sql = "INSERT INTO $table (number,name,email,phone,guests,time,token) VALUES ('$number','$name','$email','$phone','$amt','$time','$token')";

$db->query($sql);

$rid = $db->insert_id;

$headers = "From: Bready Reservations <reservations@bready.xyz>". "\r\n" . 
           "Content-type: text/html; charset=UTF-8" . "\r\n";

$url = "http://bready.xyz/reservations/inline.php?rid=$rid&number=$number&token=$token";

$fcontents = curl_get_contents($url);

mail($email,"Bready Reservation $number Confirmation",$fcontents,$headers);

$db->close();

header("Location: https://bready.xyz/reservations/index.php?text=Success! Please check your email to confirm your reservation.");
?>
