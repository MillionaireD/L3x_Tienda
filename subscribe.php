<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Incluir la biblioteca PHPMailer
require 'vendor/autoload.php';

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el correo electrónico del formulario
    $email = $_POST['email'];

    // Inicializar una variable para el mensaje de respuesta
    $message = '';

    // Configurar PHPMailer
    $mail = new PHPMailer(true); // Habilita excepciones para manejar errores

    try {
        // Configuraciones del servidor SMTP para Outlook
        $mail->isSMTP();
        $mail->Host = 'smtp.office365.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'L3x-Tienda@outlook.com'; // Tu dirección de correo de Outlook
        $mail->Password = 'Sistemas2024'; // Tu contraseña de Outlook
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Configuraciones del correo electrónico
        $mail->setFrom('L3x-Tienda@outlook.com', 'L3X TECNOSHOP');
        $mail->addAddress($email);
        $mail->Subject = 'Gracias por suscribirte a L3X TECNOSHOP';
        $mail->Body = "Hola,\n\nGracias por suscribirte a nuestro boletín. ¡Pronto recibirás nuestras últimas noticias y ofertas!\n\nSaludos,\nL3X TECNOSHOP";

        // Enviar correo
        $mail->send();
        
        // Establecer el mensaje de éxito
        $message = '<div class="alert alert-success" role="alert">Gracias por suscribirte a L3X TECNOSHOP. Revisa tu correo electrónico para confirmar la suscripción.</div>';

    } catch (Exception $e) {
        // Capturar cualquier error en el envío del correo
        $message = '<div class="alert alert-danger" role="alert">Hubo un problema al intentar suscribirte. Por favor, inténtalo de nuevo más tarde. Error: ' . htmlspecialchars($e->getMessage()) . '</div>';
    }

    // Mostrar el mensaje directamente en la página
    echo $message;

} else {
    // Redirigir al formulario si el acceso no es vía POST
    header("Location: ../l3x/index.php");
    exit();
}
?>
