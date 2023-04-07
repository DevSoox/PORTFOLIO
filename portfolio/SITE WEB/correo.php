<?php
$destinatario = "ezequielav0225@gmail.com";
// el correo del destinatario

$name = $_POST["name"];
$address = $_POST["address"];
$message = $_POST["message"];

$header = "send from site web DevSoox";
$fullemail = $message . "\nATT: " . $name;

mail($destinatario, $address, $fullemail, $header);

echo"<script>alert(correo enviado exitosamente)</script>";
echo"<script>setTime(\"location.href='index.html'\",1000)</script>";

?>