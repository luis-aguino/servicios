<?php
if(isset($_POST['email'])) {


$email_to = "yhlcontadores@gmail.com";
$email_subject = "Contacto desde el sitio web";


if(!isset($_POST['name'])

!isset($_POST['email']) 
!isset($_POST['Website']) 
!isset($_POST['Message'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['name'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "website: " . $_POST['website'] . "\n";
$email_message .= "message: " . $_POST['Message'] . "\n\n";

$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
}
?>