<?php

// $emailFrom = "companiamc@gmail.com";
// $emailTo = "companiamc@gmail.com";						
$emailFrom = "lopezericson233@gmail";
$emailTo = "lopezericson233@gmail";						
$subject = "| FORMULARIO DE CONTACTO";

$nombres = strip_tags($_POST['txtnombre']);
$email = strip_tags($_POST['txtemail']);
$telefono = strip_tags($_POST['txttelefono']);
$asunto = strip_tags($_POST['txtasunto']);

$mensaje = strip_tags($_POST['txtmensaje']);


$body = "Nombres y Apellidos: ".$nombres."\n";									
$body .= "E-mail: ".$email."\n";
$body .= "Teléfono: ".$telefono."\n";
$body .= "Asunto: ". $asunto."\n";

$body .= "Mensaje: ". $mensaje."\n";

$headers = "From: ".$emailFrom."\n";
$headers .= "Reply-To:".$email."\n";	

$envio = mail($emailTo, $subject, $body, $headers);

if($envio){
    $miresultado = '
    <div class="cont-rspta">
      <span class="icon iconGood"><i class="far fa-check-circle"></i></span>
      <h2 class="rspta-title">BIEN HECHO!</h2>
      <p class="rspta-text">La Solicitud ha sido enviada.!!!</p>
      <a href="index.php" class="btn btn-success rspta-btn">Aceptar</a>
    </div>
    ';
}else{
    $miresultado = '
    <div class="cont-rspta">
      <span class="icon iconError"><i class="far fa-times-circle"></i></span>
      <h2 class="rspta-title">ERROR!</h2>
      <p class="rspta-text">No se envió la solicitud. Por favor trate de comunicarse por otro medio.!!!</p>
      <a href="index.php" class="btn btn-danger rspta-btn">Aceptar</a>
    </div>
    ';
}
echo $miresultado;