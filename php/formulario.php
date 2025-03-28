<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once('mypathdb.php');
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

require_once ('../plugin/PHPMailer-6.1.7/src/Exception.php');
require_once ('../plugin/PHPMailer-6.1.7/src/PHPMailer.php');
require_once ('../plugin/PHPMailer-6.1.7/src/SMTP.php');



$nombre =utf8_decode($_POST["nombre"]);
$email=strtolower($_POST["email"]);
$telefono = $_POST["telefono"];
$descripcion = $_POST["descripcion"];
date_default_timezone_set('America/Bogota');
$fecha=date('Y-m-d H:i:s');



$sql = "INSERT INTO contacto (con_nombre, con_correo, con_telefono,con_des,con_fecha) 
VALUES ('$nombre','$email','$telefono','$descripcion','$fecha')"; 
//var_dump($sql);
//exit;

/********************************************* */
function enviarcorreo($email){
    $mail = new PHPMailer(true);
    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP(); //isMail                                          // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'jserna460@gmail.com';                     // SMTP username
        $mail->Password   = '46781426_jr';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 25;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom('jserna460@gmail.com', 'Junior');
        $mail->addAddress('junior.c.s.70@gmail.com', 'jrk');     // Add a recipient
        $mail->addAddress($email);               // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');   //correo de respuesta
        //$mail->addCC('cc@example.com');                         //con copia
        ///$mail->addBCC('bcc@example.com');                       // copia oculta
    
        // Attachments
       // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Contacto web sistema';
        $mail->Body    = '<h2>Hola, un usuario te ha contactado por el website!</h2>
        Hemos recibido la siguiente información:<br>
        <b>Nombre: </b> $nombre<br>
        <b>Correo: </b> $email<br>
        <b>teléfono: </b> $telefono<br>
        <b>teléfono: </b> $descripcion<br>    
        <br><br>
        Sistema web<br> 
        <img src=<?php echo SERVER ?>image/logo-viña.png/>
<p>&nbsp;</p>
<h5>Copyright © 2018. Todos los derechos reservados. Version 1.0.0 <br></h5>';
$mail->AltBody = 'Contacto web sistema';

$mail->send();
echo 'Mensaje enviado';
} catch (Exception $e) {
echo "No se envio el mensajer: {$mail->ErrorInfo}";
}

}
//**********************

if (mysqli_query($conn, $sql))
{


   // enviarcorreo($email);


//== envio de informacion al ajax
$data = array ("exito" => '1','error' => '0');
die(json_encode($data));
}else {
// ========== ocurrio un error ===========
mysqli_close($conn);
$data = array("error" => '1');
die(json_encode($data));
}

?>