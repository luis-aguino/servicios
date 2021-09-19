<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
 
$mail = new PHPMailer(true);
try {
    $mail->SMTPDebug = 2;  // Sacar esta línea para no mostrar salida debug
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';  // Host de conexión SMTP
    $mail->SMTPAuth = true;
    $mail->Username = 'yhlcontadores@gmail.com';                 // Usuario SMTP
    $mail->Password = 'Pimitumo1';                           // Password SMTP
    $mail->SMTPSecure = 'tls';                            // Activar seguridad TLS
    $mail->Port = 587;                                    // Puerto SMTP

    #$mail->SMTPOptions = ['ssl'=> ['allow_self_signed' => true]];  // Descomentar si el servidor SMTP tiene un certificado autofirmado
    #$mail->SMTPSecure = false;				// Descomentar si se requiere desactivar cifrado (se suele usar en conjunto con la siguiente línea)
    #$mail->SMTPAutoTLS = false;			// Descomentar si se requiere desactivar completamente TLS (sin cifrado)
 
    $mail->setFrom('yhlcontadores@gmail.com');		// Mail del remitente
    $mail->addAddress('luasjaramillo759@gmail.com');     // Mail del destinatario
 
    $mail->isHTML(true);
    $mail->Subject = 'Ref; Consulta';  // Asunto del mensaje
    $mail->Body    = 'Gracias por contatarnos <b>YHLCONTADORES</b>';    // Contenido del mensaje (acepta HTML)
    $mail->AltBody = 'Estudiaremos la consulta y nos comunicaremos a la brevedad del caso.';    // Contenido del mensaje alternativo (texto plano)
 
    $mail->send();
    echo 'El mensaje ha sido enviado';
} catch (Exception $e) {
    echo 'El mensaje no se ha podido enviar, error: ', $mail->ErrorInfo;
}



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
