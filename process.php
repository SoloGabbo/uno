<?php 
$toemail = 'sologabbo@me.com';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
if(mail($toemail, 'Subject', $message, 'From: ' . $email)) {
	echo 'Se ha enviado correctamente tu email.';
} else {
	echo 'Hubo un problema enviando tu email.';
}
?>