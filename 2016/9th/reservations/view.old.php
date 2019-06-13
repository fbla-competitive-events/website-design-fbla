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
?>

<style>
    html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
        margin: 0px;
        padding: 0px;
        border: 0px none;
        font: inherit;
        vertical-align: baseline;
    }
    
    * {
        box-sizing: border-box;
    }

    body {
        background: #EEE none repeat scroll 0% 0%;
        font-family: "Overpass","Helvetica","Arial",sans-serif;
        color: #222;
        line-height: 1;
    }
    
    .container{
        padding:0.25em;
        margin:0.25em;
    }
    .section-wrapper{
        margin-top: 0.5em;
        overflow: hidden;
    }
    .section-header{
        background-color: aliceblue;
        border: 1px solid #7398cf;
        color: #6483b3;     
        padding: 0.25em;
        overflow: hidden;
    }
    #resv{
        background-color:bisque;
    }
    p{
        font-size: 1.2em;
        line-height: 150%;
    }
    .header{
        width:25%;
        float:left;
        font-weight: bold;
    }

    .value{
        width:75%;
        float:left;
    }
    a h2{
        font-weight: bold;
        text-decoration: none;
    }
</style>

<div class="container">
    <img src="../img/logo.jpg" width=25%>
    
    <div class="section-wrapper">
        <div class="section-header" id="resv">
            <p class="col-3 header">Reservation Number:</p>
            <p class="col-9 header" id="rnumber"><?php echo $number;?></p>
        </div>
    </div>
    
    <div class="section-wrapper">
        <div class="section-header">
            <h2>Reservation Details</h2>
        </div>
        <div class="section-body">
            <p class="col-3 header">Name:</p>
            <p class="col-9 value" id="rname"><?php echo $name; ?></p>
            <p class="col-3 header">Email:</p>
            <p class="col-9 value" id="remail"><?php echo $email; ?></p>
            <p class="col-3 header">Phone:</p>
            <p class="col-9 value" id="rphone"><?php echo $phone; ?></p>
            <p class="col-3 header">Guests:</p>
            <p class="col-9 value" id="rguests"><?php echo $guests; ?></p>
            <p class="col-3 header">Time:</p>
            <p class="col-9 value" id="rtime"><?php echo $time; ?></p>
        </div>
    </div>
    <div class="section-wrapper" id="rconfirm">
        <a href="<?php echo "https://bready.xyz/reservations/confirm.php?rid=$rid&number=$number&token=$token"; ?>"><div class="section-header">
            <h2>Confirm</h2>
        </div></a>
        <div class="section-body">
            <p class="value">If the above link doesn't work copy and paste this into your browser: <?php echo "https://bready.xyz/reservations/confirm.php?rid=$rid&number=$number&token=$token"; ?></p>
        </div>
    </div>
    <div class="section-wrapper" id="rcancel">
        <a href="<?php echo "https://bready.xyz/reservations/cancel.php?rid=$rid&number=$number&token=$token"; ?>"><div class="section-header">
            <h2>Cancel</h2>
        </div></a>
        <div class="section-body">
            <p class="value">If the above link doesn't work copy and paste this into your browser: <?php echo "https://bready.xyz/reservations/cancel.php?rid=$rid&number=$number&token=$token"; ?></p>
        </div>
    </div>
</div>