<?php
$name = $_POST['name']
$visitor_email = $_POST['email']
$subject = $_POST['subject']
$massage = $_POST['massage']

$email_form = 'info@jerusalem48.com'

$email_subject = 'New Form Subission'

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".  
              "User Massage: $Massage .\n";

$to = 'ibrahh811@gmail.com'

$headers = "from: $email_form \r\n";

$headers = "replay-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");



?>