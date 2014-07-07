<?php

if(isset($_POST['mail'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "yoquiero@estarbien.co";
$email_subject = "formulario de contacto desde la web";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['nombre']) ||
!isset($_POST['telefono']) ||
!isset($_POST['mail']) ||
!isset($_POST['horarioPreferido']) ||
!isset($_POST['pregunta'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['nombre'] . "\n";
$email_message .= "E-mail: " . $_POST['mail'] . "\n";
$email_message .= "Teléfono: " . $_POST['telefono'] . "\n";
$email_message .= "Horario preferido: " . $_POST['horarioPreferido'] . "\n\n";
$email_message .= "Comentarios: " . $_POST['pregunta'] . "\n\n";

$email_from = $_POST['mail'];

// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
}
?>
