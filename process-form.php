<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$comentario = $_POST['comment'];

$subject =  'Nuevo mensaje de Portafolio de ' . $email;

echo $nombre . ' ' . $email . ' ' . $comentario;

if(mail('rich12953@gmail.com', $subject, $comentario)){
    echo "mensaje enviado";
} else {
    echo "No se ha podido enviar el mensaje";
}

?>

