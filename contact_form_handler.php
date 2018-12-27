<?php
if($_POST["submit"]) {
    $recipient="help@iedccoet.org";
    $subject="Contact from Website"; 
    $sender=$_POST["name_contact"];
    $senderEmail=$_POST["email_contact"];
    $message=$_POST["message"];
    $mailBody="Name: $sender\nEmail Address: $senderEmail\n\nMessage: $message";
    mail($recipient, $subject, $mailBody);
    sleep(1);
    header("Location:index.php");
?>