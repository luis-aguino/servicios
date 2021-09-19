<?php
error_reporting(0);
$nombre = $_POST['nombre'];
$email= $_POST['email'];
$opinion=$_POST['opinion'];
$mensaje=$_POST['mensaje'];

$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "mensaje " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = yhlcontadores@gmail.com;
$asunto = 'Consulta';

mail($para, $asunto, utf8_decode($mensaje), $header);
header("position:constant.html")
echo 'mensaje enviado correctamente';
?>
