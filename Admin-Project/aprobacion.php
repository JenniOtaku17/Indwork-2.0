<!doctype html>
<html>
<head>
<link rel="shortcut icon" href="img/icono.png"/>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/default.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/semantic.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/bootstrap.min.css"/>
<title>INDWORK</title>
</head>

<body>
<?php
if(isset($_GET['id'])){

$id = $_GET['id'];
$estado = $_GET['estado'];

include ('conexion.php');

    if($estado == 'aceptar'){

    $registrost=mysqli_query($conexion,"Update avances set ESTADO = 'Aprobado' where ID_CONTRA= '$_GET[id_contra]' and ID= '$_GET[id]'") or
      die("Problemas en el select:".mysqli_error($conexion));

      echo "<script> alertify.alert('INDWORK aviso','Avance aprobado!',
    function(){ alertify.message('OK'); window.location= 'vssolicitudes.php?id=".$id."'; }); </script>";

        }
       
    if($estado == 'rechazar'){

      $registrost=mysqli_query($conexion,"Update avances set ESTADO = 'Denegado'  where ID_CONTRA= '$_GET[id]' ") or
        die("Problemas en el select:".mysqli_error($conexion));
      
        echo "<script> alertify.alert('INDWORK aviso','Avance denegado!',
       function(){ alertify.message('OK'); window.location= 'vssolicitudes.php?id=".$id."'; }); </script>";

}
}
?>
</body>
</html>