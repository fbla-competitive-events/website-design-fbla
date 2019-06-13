<!DOCTYPE html>
<html>
<head>
    <title>2016 FBLA Website Design, 9th Place | Bready || Preferred Customer Loyalty Program</title>
    <meta name="viewport" content="width=device-width, intial-scale = 1.0">
    <link rel="icon" href="img/favicon.png">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/brandon.css">
        <link rel="stylesheet" href="styles/navfooter.css">
    <link rel="stylesheet" href="styles/jquery-ui.min.css">
    <link rel="stylesheet" href="styles/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="styles/jquery-ui.structure.min.css">
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="styles/jquery-ui.min.js"></script>
    <noscript>Some features of this website require JavaScript to run. With it disabled, some functional and/or visual features may not work.</noscript>
</head>
<body>
    <nav class="hide-on-mobile">
        <ul> 
            <li><a href="index.html"><img src="img/logo-small.svg"></a></li>
            <li>
                <a href="about">About</a>
                <ul>
                    <li><a href="about">About Us</a></li>
                    <li><a href="reviews">Reviews</a></li>
                    <li><a href="loyalty">Loyalty Program</a></li>
                </ul>
            </li>
            <li><a href="menu">Menu</a></li>
            <li>
                <a href="contact">Contact</a>
                <ul>
                    <li><a href="contact">Contact Us</a></li>
                    <li><a href="reservations">Reservations</a></li>
                </ul>
            </li>
	   </ul>
    </nav>
    <nav class="hide-on-desktop">
        <script>
            function toggle(){
                $("#hamburger").slideToggle();
            }
        </script>
        <img src="img/hamburger.svg" id="toggleMenu" onclick="toggle()">
        <ul id="hamburger" class="hidden"> 
            <li><a href="index.html">Home</a></li>
            <li><a href="about">About Us</a></li>
            <li><a href="reviews">Reviews</a></li>
            <li><a href="loyalty">Loyalty Program</a></li>
            <li><a href="menu">Menu</a></li>
            <li><a href="contact">Contact Us</a></li>
            <li><a href="reservations">Reservations</a></li>
	   </ul>
    </nav>
    <div class="navoffset"></div>
<?php if (isset($_REQUEST['text'])) { ?>
    <div class="row center-text">
        <h2>
            <?php
                echo urldecode($_REQUEST["text"]);
            ?>
        </h2>
    </div>
<?php } ?>