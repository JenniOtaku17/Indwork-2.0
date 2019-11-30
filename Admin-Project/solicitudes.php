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
$usuario = $_REQUEST['usuario'];
$estado = $_GET['estado'];

include ('conexion.php');

    if($estado == 'aceptar'){
    $registrost=mysqli_query($conexion,"Update contratos set ESTADO = 'Aceptado' where ID= '$_GET[id]' ") or
      die("Problemas en el select:".mysqli_error($conexion));
    
    $registrost=mysqli_query($conexion,"insert into avances(ID_CONTRA,PORCENTAJE,DESCRIPCION,ESTADO) values('$id',0,'Inicio del trabajo','Aprobado') ") or
    die("Problemas en el select:".mysqli_error($conexion));

      echo "<script> alertify.alert('INDWORK aviso','Solicitud aceptada con exito!',
    function(){ alertify.message('OK'); window.location= 'vssolicitudes.php?id=".$id."'; }); </script>";

        }
        $fecha = date('Y-m-d H:i:s');
        else if($estado == 'rechazar'){

      
          $registrost=mysqli_query($conexion,"Update contratos set ESTADO = 'Denegado' where ID= '$_GET[id]' ") or
            die("Problemas en el select:".mysqli_error($conexion));
  
            echo "<script> alertify.alert('INDWORK aviso','Solicitud rechazada con exito!',
   function(){ alertify.message('OK'); window.location= 'vssolicitudes.php?id=".$usuario."'; }); </script>";
  
      }

    $terminados=mysqli_query($conexion,"select sum(porcentaje) from avances where ID_CONTRA = $id") or
    die("Problemas en el select:".mysqli_error($conexion));

    while($ter =mysqli_fetch_array($terminados)){

    while($ter['sum(porcentaje)'] == 100)

    if($estado == 'terminar'){
      $registrost=mysqli_query($conexion,"Update contratos set ESTADO = 'Terminado',FECHA_FIN = '$fecha'  where ID= '$_GET[id]' ") or
        die("Problemas en el select:".mysqli_error($conexion));
      
        echo "<script> alertify.alert('INDWORK aviso','Trabajo terminado!',
       function(){ alertify.message('OK'); window.location= 'vssolicitudes.php?id=".$id."'; }); </script>";
      
          }
        }
}

?>
</body>
</html>