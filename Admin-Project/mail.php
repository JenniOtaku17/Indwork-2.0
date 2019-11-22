<?php

$name = "correo de prueba";
$asunto = "este es un correo de prueba";
$msg = "descripcion del correo";
$email = "20175329@itla.edu.do";
$header = "From: indworkcompany@gmail.com";
$mail = mail($email,$asunto,$msg,$header);

if($mail){
	echo "mensaje enviado";
}

  ?>
