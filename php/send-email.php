<?php 
$name = isset($_POST['name']) ? $_POST['name'] : "Sem nome";
$email = isset($_POST['email']) ? $_POST['email'] : "Sem email";
$message = isset($_POST['message']) ? $_POST['message'] : "Sem message";

$sendTo = "empresa@empresa.com";
$mailBody = "The text for the mail...";
$subject = $message;
$header = "From: ". $name . " <" . $email . ">\r\n";

mail($sendTo, $subject, $mailBody, $header); 
?>