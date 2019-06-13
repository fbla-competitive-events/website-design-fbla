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
$time = $d->format('F j, o \a\t g:iA');

?>

<!-- Inliner Build Version 4380b7741bb759d6cb997545f3add21ad48f010b -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;">
<head></head>
<body style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;">
<style type="text/css">
.buttons:hover {
background: #6483b3;
}
</style>
<div class="container" style="vertical-align: baseline; box-sizing: border-box; max-width: 800px; color: #222; margin: auto; padding: 0px; border: 0px none; font: 2vh 'Roboto','Helvetica','Arial', sans-serif;">
    <div class="header" style="font-size: 2em; font-style: normal; font-variant: normal; font-weight: bold; line-height: normal; vertical-align: baseline; box-sizing: border-box; text-align: center; background: #edbc64; margin: 0px; padding: 1em; border: 0px none;" align="center">
        Bready Reservation #<?php echo $number;?>
    </div>
    <div class="body" style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 2em; border: 0px none;">
        <p style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;">Hello Valued Customer!<br style="box-sizing: border-box;"><br style="box-sizing: border-box;">You have recently made a reservation with us. Please verify the following details and click on the confirmation link. If you did not make a reservation with us or would like to cancel your reservation, please click on the cancellation link below.</p>
        <div class="data" style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;">
            <table style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; word-break: break-all; margin: auto; padding: 1em 0em; border: 0px none;">
<tr style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;">
<td style="font-size: normal; font-style: normal; font-variant: normal; font-weight: bold; line-height: normal; vertical-align: baseline; box-sizing: border-box; text-align: right; margin: 0px; padding: 0px 2em 0px 0px; border: 0px none;" align="right" valign="baseline">Reservation ID</td>
                    <td style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;" valign="baseline"><?php echo $number;?></td>
                </tr>
<tr style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;">
<td style="font-size: normal; font-style: normal; font-variant: normal; font-weight: bold; line-height: normal; vertical-align: baseline; box-sizing: border-box; text-align: right; margin: 0px; padding: 0px 2em 0px 0px; border: 0px none;" align="right" valign="baseline">Name</td>
                    <td style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;" valign="baseline"><?php echo $name;?></td>
                </tr>
<tr style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;">
<td style="font-size: normal; font-style: normal; font-variant: normal; font-weight: bold; line-height: normal; vertical-align: baseline; box-sizing: border-box; text-align: right; margin: 0px; padding: 0px 2em 0px 0px; border: 0px none;" align="right" valign="baseline">Email</td>
                    <td style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;" valign="baseline"><?php echo $email;?></td>
                </tr>
<tr style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;">
<td style="font-size: normal; font-style: normal; font-variant: normal; font-weight: bold; line-height: normal; vertical-align: baseline; box-sizing: border-box; text-align: right; margin: 0px; padding: 0px 2em 0px 0px; border: 0px none;" align="right" valign="baseline">Phone</td>
                    <td style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;" valign="baseline"><?php echo $phone;?></td>
                </tr>
<tr style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;">
<td style="font-size: normal; font-style: normal; font-variant: normal; font-weight: bold; line-height: normal; vertical-align: baseline; box-sizing: border-box; text-align: right; margin: 0px; padding: 0px 2em 0px 0px; border: 0px none;" align="right" valign="baseline">Party Size</td>
                    <td style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;" valign="baseline"><?php echo $guests;?></td>
                </tr>
<tr style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;">
<td style="font-size: normal; font-style: normal; font-variant: normal; font-weight: bold; line-height: normal; vertical-align: baseline; box-sizing: border-box; text-align: right; margin: 0px; padding: 0px 2em 0px 0px; border: 0px none;" align="right" valign="baseline">Time</td>
                    <td style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;" valign="baseline"><?php echo $time;?></td>
                </tr>
</table>
</div>
            <table style="width: 100%; font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;"><tr style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;">
<td class="buttons" style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; width: 50%; text-align: center; transition: background .25s; cursor: pointer; background: #7398cf; margin: 0px; padding: 1em; border: 0px none;" align="center" bgcolor="#7398cf" valign="baseline">
                        <a href="<?php echo "https://bready.xyz/reservations/confirm.php?rid=$rid&number=$number&token=$token"; ?>" target="_blank" style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; text-decoration: none; color: white; margin: 0px; padding: 0px; border: 0px none;">Confirm</a>
                    </td>
                    <td class="buttons" style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; width: 50%; text-align: center; transition: background .25s; cursor: pointer; background: #7398cf; margin: 0px; padding: 1em; border: 0px none;" align="center" bgcolor="#7398cf" valign="baseline">
                        <a href="<?php echo "https://bready.xyz/reservations/cancel.php?rid=$rid&number=$number&token=$token"; ?>" target="_blank" style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; text-decoration: none; color: white; margin: 0px; padding: 0px; border: 0px none;">Cancel</a>
                    </td>
                </tr></table>
<br style="box-sizing: border-box;"><p class="clear" style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; clear: both; margin: 0px; padding: 0px; border: 0px none;">If the above buttons do not work, copy and paste or type in exactly the following links into a web browser.</p>
        <br style="box-sizing: border-box;"><p class="word-break clear" style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; word-break: break-all; clear: both; margin: 0px; padding: 0px; border: 0px none;">
            <span style="font-size: normal; font-style: normal; font-variant: normal; font-weight: bold; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;">Confirm: </span><?php echo "https://bready.xyz/reservations/confirm.php?rid=$rid&number=$number&token=$token"; ?>
            <br style="box-sizing: border-box;"><br style="box-sizing: border-box;"><span style="font-size: normal; font-style: normal; font-variant: normal; font-weight: bold; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;">Cancel: </span><?php echo "https://bready.xyz/reservations/cancel.php?rid=$rid&number=$number&token=$token"; ?>
        </p>
        <div class="footer clear" style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; text-align: center; clear: both; margin: 0px; padding: 0px; border: 0px none;" align="center">
            <br style="box-sizing: border-box;"><p style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;">Thank you for choosing to dine with us!</p>
<br style="box-sizing: border-box;"><div class="img" style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; text-align: center; max-width: 80%; margin: 0px auto; padding: 0px; border: 0px none;" align="center">
                <img src="https://bready.xyz/img/logo.jpg" style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; max-width: 500px; margin: 0px; padding: 0px; border: 0px none;">
</div>
        </div>
    </div>
    <br style="box-sizing: border-box;">
</div>
</body>
</html>

