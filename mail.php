<?php

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "gudu.chango@gmail.com";
$email_subject = "hacktlon";
$email_from = "gudu.chango@gmail.com";

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email= $_POST['email'];
$celular = $_POST['celular'];
$ciudad = $_POST['ciudad'];
$skills = $_POST['skills'];
$universidad = $_POST['universidad'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$comida = $_POST['comida'];
$comentarios = $_POST['comentarios'];



$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $nombre . "\n";
$email_message .= "Apellido: " . $apellido . "\n";
$email_message .= "E-mail: " . $email . "\n";
$email_message .= "Celular: " . $celular . "\n";
$email_message .= "Ciudad: " . $ciudad . "\n\n";
$email_message .= "skills: " . $skills . "\n\n";
$email_message .= "universidad: " . $universidad . "\n\n";
$email_message .= "fecha_nacimiento: " . $fecha_nacimiento . "\n\n";
$email_message .= "comida: " . $comida . "\n\n";
$email_message .= "comentarios: " . $comentarios . "\n\n";



// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";

$destinatario = "pepito@desarrolloweb.com"; 
$asunto = "Este mensaje es de prueba"; 
$cuerpo = ' 
<html> 
<head> 
   <title>Prueba de correo</title> 
</head> 
<body> 
<h1>Hola amigos!</h1> 
<p> 
<b>Bienvenidos a mi correo electrónico de prueba</b>. Estoy encantado de tener tantos lectores. Este cuerpo del mensaje es del artículo de envío de mails por PHP. Habría que cambiarlo para poner tu propio cuerpo. Por cierto, cambia también las cabeceras del mensaje. 
</p> 
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: Miguel Angel Alvarez <gudu.chango@hotmail.com>\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
$headers .= "Reply-To: mariano@desarrolloweb.com\r\n"; 

//ruta del mensaje desde origen a destino 
$headers .= "Return-path: gudu.chango@hotmail.com\r\n"; 

//direcciones que recibián copia 
$headers .= "Cc: gudu.chango@hotmail.com\r\n"; 

//direcciones que recibirán copia oculta 
$headers .= "Bcc: gudu.chango@hotmail.com\r\n"; 

mail($destinatario,$asunto,$cuerpo,$headers) 
?>
