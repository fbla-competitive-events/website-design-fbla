<?php
session_start();
$from = $_POST["from"];
$email = $_POST["email"];
if (isset($_POST["subject"]))
    $subject = $_POST["subject"];
else
    $subject = "Review";
$message = $_POST["message"];

$message = "Message from $from ($email):\n\n" . $message;
if ($subject != "Review")
    $location = "Location: http://bready.xyz/contact/index.php?text=";
else
    $location = "Location: http://bready.xyz/reviews/index.php?text=";

// Check if the token was submitted, and if the session has the token.
if (empty($_SESSION['token']) || empty($_POST['token'])) {
	header($location . "An error occured");
	exit();
}

if ($_SESSION['token'] != $_POST['token']) {
	header($location . "An authentication error occured");
} else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$_SESSION['token'] = ""; // Invalidate token.
    mail ("REMOVED@gmail.com", $subject, $message);
    header($location . "Sent!");
} 
else{
    header($location . "Please enter a valid email address");
}
?>