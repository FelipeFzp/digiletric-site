<?php 
$name = isset($_POST['name']) ? $_POST['name'] : "Sem nome";
$email = isset($_POST['email']) ? $_POST['email'] : "Sem e-mail";
$message = isset($_POST['message']) ? $_POST['message'] : "Sem messagem";

$sendTo = "digiletric@digiletric.com.br";
$subject = "Mensagem de " . $name . " (www.digiletric.com.br)";

$mailBody = "<b>E-mail:</b> " . $email . "<br>";
$mailBody .= "<b>Nome:</b> " . $name . "<br>";
$mailBody .= "<b>Data de envio:</b> " . date("d/m/Y") . "<br>";
$mailBody .= "<b>Mensagem:</b><br>" . $message;

$header = "Content-type: text/html";

mail($sendTo, $subject, $mailBody, $header); 

header('Location: ../index.html#contact');
?>