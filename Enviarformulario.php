<?php
if(isset($_POST['enviar'])) {
    // Recuperar los valores del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    
    // Configurar los datos de correo electrónico
    $destinatario = "joseaugustofloreszuniga@gmail.com"; // Reemplazar con tu dirección de correo electrónico
    $asunto_email = "Nuevo mensaje de contacto de " . $nombre;
    $mensaje_email = "Nombre: " . $nombre . "\r\nCorreo electrónico: " . $correo . "\r\nAsunto: " . $asunto . "\r\nMensaje: " . $mensaje;
    $cabeceras = "From: " . $correo . "\r\n" .
        "Reply-To: " . $correo . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    function form_mail($destinatario, $sDe, $sAsunto){
        $bHayFicheros = 0;
        $sCabeceraTexto = "";
        $sAdjuntos = "";

        if ($sDe) {
            $sCabeceras = "From: " . $sDe . "\n";
        } else {
            $sCabeceras = "";
        }

        // Código para enviar el correo electrónico
    }

    // Enviar el correo electrónico
    if(mail($destinatario, $asunto_email, $mensaje_email, $cabeceras)) {
        echo "El mensaje ha sido enviado correctamente.";
    } else {
        echo "Hubo un problema al enviar el mensaje. Inténtalo de nuevo más tarde.";
    }

}
?>

