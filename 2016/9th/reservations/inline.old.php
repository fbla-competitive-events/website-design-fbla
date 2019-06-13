<?php
require_once("../common.php");

$rid = $_GET['rid'];
$number = $_GET['number'];
$token = $_GET['token'];

$db = get_db();

$tbl = $tbls['reservations'];

$sql = "SELECT * FROM $tbl WHERE rid='$rid' AND number='$number' AND token='$token'";

$result = $db->query($sql);

$data = $result->fetch_assoc();

$name = $data['name'];
$email = $data['email'];
$phone = $data['phone'];
$guests = $data['guests'];
$raw_time = $data['time'];

$d = new DateTime($raw_time);
$time = $d->format("r");

echo "
<!DOCTYPE html PUBLIC '-//W3C//DTD HTML 4.0 Transitional//EN' 'http://www.w3.org/TR/REC-html40/loose.dtd'>
<html style='font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;'>
<head>

</head>
<body style='vertical-align: baseline; box-sizing: border-box; color: #222; font-style: normal; font-variant: normal; font-weight: normal; font-size: normal; line-height: normal; background-image: none; background-attachment: scroll; background-repeat: repeat; background-color: #EEE; background-position: 0% 0%; margin: 0px; padding: 0px; border: 0px none;' bgcolor='#EEE'><div style='font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0.25em; padding: 0.25em; border: 0px none;'>
    <img src='https://bready.xyz/img/logo.jpg' width='25%' style='font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;'>
    
    
    <div style='font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; overflow: hidden; margin: 0.5em 0px 0px; padding: 0px; border: 0px none;'>
        <div style='font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; color: #6483b3; overflow: hidden; margin: 0px; padding: 0.25em; border: 1px solid #7398cf; background-color:bisque'>
            <p style='font-size: 1.2em; font-style: normal; font-variant: normal; font-weight: bold; line-height: 150%; vertical-align: baseline; box-sizing: border-box; width: 25%; float: left; margin: 0px; padding: 0px; border: 0px none;'>Reservation Number:</p>
            <p style='font-size: 1.2em; font-style: normal; font-variant: normal; font-weight: bold; line-height: 150%; vertical-align: baseline; box-sizing: border-box; width: 25%; float: left; margin: 0px; padding: 0px; border: 0px none;'>$number</p>
        </div>
    </div>
    
    <div style='font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; overflow: hidden; margin: 0.5em 0px 0px; padding: 0px; border: 0px none;'>
        <div style='font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; color: #6483b3; overflow: hidden; background-color: aliceblue; margin: 0px; padding: 0.25em; border: 1px solid #7398cf;'>
            <h2 style='font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;'>Reservation Details</h2>
        </div>
        <div style='font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;'>
            <p style='font-size: 1.2em; font-style: normal; font-variant: normal; font-weight: bold; line-height: 150%; vertical-align: baseline; box-sizing: border-box; width: 25%; float: left; margin: 0px; padding: 0px; border: 0px none;'>Name:</p>
            <p style='font-size: 1.2em; font-style: normal; font-variant: normal; font-weight: normal; line-height: 150%; vertical-align: baseline; box-sizing: border-box; width: 75%; float: left; margin: 0px; padding: 0px; border: 0px none;'>$name</p>
            <p style='font-size: 1.2em; font-style: normal; font-variant: normal; font-weight: bold; line-height: 150%; vertical-align: baseline; box-sizing: border-box; width: 25%; float: left; margin: 0px; padding: 0px; border: 0px none;'>Email:</p>
            <p style='font-size: 1.2em; font-style: normal; font-variant: normal; font-weight: normal; line-height: 150%; vertical-align: baseline; box-sizing: border-box; width: 75%; float: left; margin: 0px; padding: 0px; border: 0px none;'>$email</p>
            <p style='font-size: 1.2em; font-style: normal; font-variant: normal; font-weight: bold; line-height: 150%; vertical-align: baseline; box-sizing: border-box; width: 25%; float: left; margin: 0px; padding: 0px; border: 0px none;'>Phone:</p>
            <p style='font-size: 1.2em; font-style: normal; font-variant: normal; font-weight: normal; line-height: 150%; vertical-align: baseline; box-sizing: border-box; width: 75%; float: left; margin: 0px; padding: 0px; border: 0px none;'>$phone</p>
            <p style='font-size: 1.2em; font-style: normal; font-variant: normal; font-weight: bold; line-height: 150%; vertical-align: baseline; box-sizing: border-box; width: 25%; float: left; margin: 0px; padding: 0px; border: 0px none;'>Guests:</p>
            <p style='font-size: 1.2em; font-style: normal; font-variant: normal; font-weight: normal; line-height: 150%; vertical-align: baseline; box-sizing: border-box; width: 75%; float: left; margin: 0px; padding: 0px; border: 0px none;'>$guests</p>
            <p style='font-size: 1.2em; font-style: normal; font-variant: normal; font-weight: bold; line-height: 150%; vertical-align: baseline; box-sizing: border-box; width: 25%; float: left; margin: 0px; padding: 0px; border: 0px none;'>Time:</p>
            <p style='font-size: 1.2em; font-style: normal; font-variant: normal; font-weight: normal; line-height: 150%; vertical-align: baseline; box-sizing: border-box; width: 75%; float: left; margin: 0px; padding: 0px; border: 0px none;'>$time</p>
        </div>
    </div>
    <div style='font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; overflow: hidden; margin: 0.5em 0px 0px; padding: 0px; border: 0px none;'>
        <a href='https://bready.xyz/reservations/confirm.php?rid=$rid&amp;number=$number&amp;token=$token' style='font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;'><div style='font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; color: #6483b3; overflow: hidden; background-color: aliceblue; margin: 0px; padding: 0.25em; border: 1px solid #7398cf;'>
            <h2 style='font-size: normal; font-style: normal; font-variant: normal; font-weight: bold; line-height: normal; vertical-align: baseline; box-sizing: border-box; text-decoration: none; margin: 0px; padding: 0px; border: 0px none;'>Confirm</h2>
        </div></a>
        <div style='font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;'>
            <p style='font-size: 1.2em; font-style: normal; font-variant: normal; font-weight: normal; line-height: 150%; vertical-align: baseline; box-sizing: border-box; width: 75%; float: left; margin: 0px; padding: 0px; border: 0px none;'>If the above link doesn't work copy and paste this into your browser: https://bready.xyz/reservations/confirm.php?rid=$rid&amp;number=$number&amp;token=$token</p>
        </div>
    </div>
    <div style='font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; overflow: hidden; margin: 0.5em 0px 0px; padding: 0px; border: 0px none;'>
        <a href='https://bready.xyz/reservations/cancel.php?rid=$rid&amp;number=$number&amp;token=$token' style='font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;'><div style='font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; color: #6483b3; overflow: hidden; background-color: aliceblue; margin: 0px; padding: 0.25em; border: 1px solid #7398cf;'>
            <h2 style='font-size: normal; font-style: normal; font-variant: normal; font-weight: bold; line-height: normal; vertical-align: baseline; box-sizing: border-box; text-decoration: none; margin: 0px; padding: 0px; border: 0px none;'>Cancel</h2>
        </div></a>
        <div style='font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;'>
            <p style='font-size: 1.2em; font-style: normal; font-variant: normal; font-weight: normal; line-height: 150%; vertical-align: baseline; box-sizing: border-box; width: 75%; float: left; margin: 0px; padding: 0px; border: 0px none;'>If the above link doesn't work copy and paste this into your browser: https://bready.xyz/reservations/cancel.php?rid=$rid&amp;number=$number&amp;token=$token</p>
        </div>
    </div>
</div></body>
</html>";

?>