
<?php
$to = "jx.propitech@gmail.com";
$subject = "Message important - Ne pas répondre";
$message = file_get_contents("lire.php");
$headers = "From: Ne pas répondre <milay@alwaysdata.net>\r\n";
$headers .= "Reply-To: milay@alwaysdata.net\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo "Email envoyé avec succès.";
} else {
    echo "Échec de l'envoi de l'email.";
}
?>
