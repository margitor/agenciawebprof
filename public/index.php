<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$para = 'agenciawebprof@gmail.com';
$titulo = 'Hola';
 
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
 
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo)) {
echo 'El mensaje se ha enviado. Te responderemos a la brevedad.';
} else {
echo 'Falló el envio';
}
}
?>