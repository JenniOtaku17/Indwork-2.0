<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie-edge">
<link rel="shortcut icon" href="img/icono.png"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/default.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/semantic.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/bootstrap.min.css"/>
<title>Registrarse</title>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>

  <!-----------------Navigation------------------->
<?
  	include ('navbar.php');
?>
	
<br>
<br>

<!--------------------Container------------------------>

  <?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

  //error_reporting(0);
  if(isset($_POST['registrar']))
  {
    $nombre = $_FILES['cv']['name'];
    $tipo = $_FILES['cv']['type'];
    $tamaño = $_FILES['cv']['size'];
    $ruta = $_FILES['cv']['tmp_name'];
    $destino = "cvs/".$nombre;
	  
	  copy($ruta, $destino);
  }

include ('conexion.php');
$telefono = $_REQUEST['prefijo'].$_REQUEST['telefono'];
    if ($_REQUEST['password']== $_REQUEST['repassword']){
if( isset($_REQUEST['nombre']) and isset($_REQUEST['cedula']) and isset($_REQUEST['apellido']) and isset($_REQUEST['oficio']) and isset($_REQUEST['tipodeusuario']) and isset($_REQUEST['pais']) and isset($_FILES['foto']) and isset($nombre) and isset($_REQUEST['telefono']) and isset($_REQUEST['direccion']) and isset($_REQUEST['correo']) and isset($_REQUEST['password']) and isset($_REQUEST['region']) and isset($_REQUEST['me']) and isset($_REQUEST['fb'])){
$img = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
mysqli_query($conexion,"insert into profesional (NOMBRE,APELLIDO,CEDULA,OFICIO,TIPODEUSUARIO,PAIS,FOTO,CV,TELEFONO,DIRECCION,CORREO,PASSWORD,REGION,ME,FB) values
                       ('$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[cedula]', '$_REQUEST[oficio]', '$_REQUEST[tipodeusuario]','$_REQUEST[pais]','$img','$nombre', $telefono, '$_REQUEST[direccion]','$_REQUEST[correo]','$_REQUEST[password]','$_REQUEST[region]','$_REQUEST[me]','$_REQUEST[fb]')")
  or die("Problemas en el select".mysqli_error($conexion));

  require 'PHPMailer/vendor/autoload.php';
  
  $name = $_REQUEST['nombre'];
  $mail = new PHPMailer(true);
  
  try {
      $mail->SMTPDebug = 3;
      $mail->isSMTP();
  
      $mail->Host = 'in-v3.mailjet.com';
      $mail->SMTPAuth = true;
  
      $mail->Username = '9712ab0bbbf6cfd71813c1cadafa39af';
      $mail->Password = 'bcbf5b9ecc15d2df8071a392539819fa';
  
      $mail->SMTPSecure = 'tls';
      $mail->Port = 587;
  
      ## MENSAJE A ENVIAR
      $mail->setFrom('indworkcompany@gmail.com');
      $mail->addAddress($_REQUEST['correo']);
  
      $mail->isHTML(true);
      $mail->Subject = 'Confirma tu cuenta de IndWork ' .$name;
      $mail->Body = file_get_contents('PHPMailer/plantilla2.html');
  
      $mail->send();
  
  } catch (Exception $exception) {
      echo 'Algo salio mal', $exception->getMessage();
  }
  
  
mysqli_close($conexion);

  echo "<script> alertify.alert('INDWORK aviso','Usuario registrado Exitosamente!', function(){ alertify.message('OK'); window.location= 'iniciarsesion.php'; }); </script>";
}else
{
	echo "<script> alertify.alert('INDWORK aviso','Error al registrar usuario!', function(){ alertify.message('OK'); window.location= 'registrar.php'; }); </script>";
}}else{
  echo "<script> alertify.alert('INDWORK aviso','Error al registrar usuario!', function(){ alertify.message('OK'); window.location= 'registrar.php'; }); </script>";
}

?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>