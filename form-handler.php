<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'Simosihlecleaningservice.com';

$email_subject = 'New Form Submission';

$email_body = "User name: $name.\n".
                "User Email: $visitor_email.\n".
                "User Message: $message.\n";
  
$to = 'Simosihlecleaning@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $email_from \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>

