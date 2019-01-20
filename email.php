<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$comentario = $_POST['comment'];

$subject = 'Nuevo mensaje de Portafolio de ' . $email;

echo $nombre . ' ' . $email . ' ' . $comentario;

if (mail('rich12953@gmail.com', $subject, $comentario)) {
    echo "mensaje enviado";
} else {
    echo "No se ha podido enviar el mensaje";
}

?>

</body>
</html>
