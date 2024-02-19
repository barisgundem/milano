<?php
  if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "barisgundem02@gmail.com"; // Added a semicolon here
    $headers = "From: ".$mailFrom;
    $txt = "You have a message " . $name . ".\n\n" . $message; // Added dots for concatenation

    mail($mailTo, $name, $txt, $headers);
  }
?>