<?php 

include ('conexion.php');

$notificaciones =  mysqli_query($conexion,"Select ID from contratos
 where id_receptor = '$id' and ESTADO= ' '") or
  die("Problemas en el select:".mysqli_error($conexion));

$count = 0;
  while($cantidad =mysqli_fetch_array($notificaciones)){
    $count = $count +1;
  } 

$avances =  mysqli_query($conexion,"Select a.ID from avances a inner join contratos c on c.ID = a.ID_CONTRA where c.id_receptor = '$id' and a.ESTADO= ' ' group by a.ID") or
  die("Problemas en el select:".mysqli_error($conexion));

$avs = 0;
  while($avance =mysqli_fetch_array($avances)){
    $avs = $avs +1;
  }

?>