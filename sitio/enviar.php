<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enviar</title>
</head>

<body>
<?php

//se arma el array POST
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$mensaje=$_POST["mensaje"];

$destino="trinidadschumacher1@mail.com";
$asunto="Contacto formulario - Sitio";
$mensaje="Nombre: ".$nombre." Email: ".$email." Mensaje: ".$mensaje;

$header="From: ".$nombre."<".$email.">";

$enviado = mail($destino,$asunto,$mensaje,$header);

if($enviado == true){
	echo "Su correo ha sido enviado.";
}else{
	echo "Hubo un error en el envio del mail.";
}

include("conexion.php");

// $consulta=mysqli_query($conexion, "INSERT INTO contactos VALUES ('','$nombre','$email','$mensaje')");


$consulta = mysqli_query($conexion, "INSERT INTO contactos (nombre,email,mensaje)VALUES ( '$nombre','$email','$mensaje')") or die(mysqli_error($conexion));



?>
</body>
</html>