<?php
    // Llamando a los campos
    $nombre = $_POST['user'];
    $apellidos= $_POST['apellidos'];
    $correo = $_POST['email'];
    $mensaje = $_POST['menssage'];

    // Datos para el correo
    $destinatario = "carlobonilla640@gmail.com";
    $asunto = "Contacto desde nuestra web";

    $carta = "De: $nombre \n";
    $carta .= "Correo: $correo \n";
    $carta .= "Mensaje: $mensaje";
    $carta .= "\n\n\n\n\n Este mensaje se envia de manera automática. Por favor no responder.";

    // Enviando Mensaje
    mail($destinatario, $asunto, $carta);
    header('Location:mensaje.html');

?>