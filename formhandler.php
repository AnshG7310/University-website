<?php
    $name = $_POST['name'];
    $visitor-email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'alexgoyal989@gmail.com';
    $email_subject = 'New Form Submission';
    $email_body = "User name : $name.\n".
                   "User Email : $visitor-email.\n".
                    "Subject : $subject.\n".
                     "User Message : $message.\n".;
    $to = 'alexgoyal6397@gmail.com';
    $headers = "From : $email_from \r\n";
    $headers .= " Reply-To: $visitor-email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: contact.html");
?>