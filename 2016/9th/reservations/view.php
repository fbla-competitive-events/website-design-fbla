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
    .container{
        font-family: "Roboto","Helvetica","Arial",sans-serif;
        color: #222;
        font-size: 2vh;
}
    .header{
        background: #edbc64;
        text-align: center;
        font-weight: bold;
        font-size: 2em;
        padding: 1em;
    }
    .body{
        padding: 2em;
    }
    table{
        margin: auto;
        padding: 1em 0em;
        word-break: break-all;
    }
    .word-break{
        word-break: break-all;
    }
    tr td:first-child{
        text-align: right;
        font-weight: bold;
        padding-right: 2em;
    }
    .buttons:after{
        visibility: hidden;
        display: block;
        font-size: 0;
        content: " ";
        clear: both;
        height: 0;
    }
    .cancel{
        float: right;
    }
    .confirm{
        float: left;
    }
    .confirm, .cancel{
        width: 45%;
        background: #7398cf;
        color: white;
        padding: 1em;
        text-align: center;
        transition: background .25s;
        cursor: pointer;
    }
    .confirm:hover, .cancel:hover{
        background: #6483b3;
    }
    .footer{
        text-align: center;
    }
    .img{
        margin-left: auto;
        margin-right: auto;
        text-align: center;
        max-width: 80%;
    }
    img{
        width: 100%;
    }
    span{
        font-weight: bold;
    }
</style>


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

<div class="container">
<!--
    $number (id)
    $name
    $email
    $phone
    $guests
    $time
-->
    <div class="header">
        Bready Reservation #<?php echo $number;?>
    </div>
    <div class="body">
        <p>Hello Valued Customer!<br><br>You have recently made a reservation with us. Please verify the following details and click on the confirmation link. If you did not make a reservation with us or would like to cancel your reservation, please click on the cancellation link below.</p>
        <div class="data">
            <table>
                <tr>
                    <td>Reservation ID</td>
                    <td>#<?php echo $number;?></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><?php echo $name; ?></td>
                </tr>
                
                <tr>
                    <td>Email</td>
                    <td><?php echo $email; ?></td>
                </tr>
                
                <tr>
                    <td>Phone</td>
                    <td><?php echo $phone; ?></td>
                </tr>
                
                <tr>
                    <td>Party Size</td>
                    <td><?php echo $guests; ?></td>
                </tr>
                
                <tr>
                    <td>Time</td>
                    <td><?php echo $time; ?></td>
                </tr>
            </table>
        </div>
        <div class="buttons">
            <a href="<?php echo "https://bready.xyz/reservations/confirm.php?rid=$rid&number=$number&token=$token"; ?>" target="_blank">
                <div class="confirm">
                    Confirm
                </div>
            </a>
            <a href="<?php echo "https://bready.xyz/reservations/cancel.php?rid=$rid&number=$number&token=$token"; ?>" target="_blank">
                <div class="cancel">
                    Cancel
                </div>
            </a>
        </div>
        <br>
        <p>If the above buttons do not work, copy and paste or type in exactly the following links into a web browser.</p>
        <br>
        <p class="word-break">
            <span>Confirm: </span><?php echo "https://bready.xyz/reservations/confirm.php?rid=$rid&number=$number&token=$token"; ?>
            <br>
            <br>
            <span>Cancel: </span><?php echo "https://bready.xyz/reservations/cancel.php?rid=$rid&number=$number&token=$token"; ?>
        </p>
    </div>
    <div class="footer">
        <p>Thank you for choosing to dine with us!</p><br>
        <div class="img">
            <img src="https://bready.xyz/img/logo.jpg">
        </div>
    </div>
    <br>
</div>