<?php
if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $mailFrom=$_POST['mail'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $mailTo=saipriya.rajagopal2020@vitstudent.ac.in;
    $headers="From: ".$mail;
    mail($mailTo,$subject,$headers);
    header("Location: index.php?mailsend");
}