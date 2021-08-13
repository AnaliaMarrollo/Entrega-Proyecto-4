<?php

$destino = "anam85_1@hotmail.com";
$asunto = "Recibiste una consulta desde la web Profe Tronk";
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$tipodeconsulta = $_POST["tipodeconsulta"];
$consulta = $_POST["mensaje"];
$preferenciacontacto = $_POST["preferenciacontacto"];
$promociones = $_POST["promociones"];

$contenido = "Nombre: " . $nombre . "\nApellido: " . $apellido . "\nEdad: " . $edad . "\nEmail: " . $email . "\nTelefono: " . $telefono . "\nTipo de contulta: " . $tipodeconsulta . "\nMensaje: " . $consulta . "\nPreferencia de contacto: " . $preferenciacontacto . "\nPromociones: " . $promociones;

mail($destino, $asunto, $contenido);
header("location:index.html");

?>


