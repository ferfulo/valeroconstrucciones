<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $to = "fernandafulo96@gmail.com"; 
        $subject = "Nuevo contacto desde el sitio web";
        $message = "Un cliente dejó su correo: $email";
        $headers .= "Reply-To: $email\r\n";

        if (mail($to, $subject, $message, $headers)) {
            echo "Gracias, nos pondremos en contacto contigo pronto.";
        } else {
            echo "Hubo un problema al enviar el correo. Inténtalo de nuevo más tarde.";
        }
    } else {
        echo "Por favor, introduce una dirección de correo válida.";
    }
}
?>
