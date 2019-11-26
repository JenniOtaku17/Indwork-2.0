<?php
include ('conexion.php');

$registros=mysqli_query($conexion,"select a.ID,a.ID_CONTRA,a.PORCENTAJE,a.DESCRIPCION,c.ID_EMISOR,c.ID_RECEPTOR 
from avances a inner join contratos c on a.ID_CONTRA = c.ID
where C.ID_RECEPTOR = 9 ") or
  die ("Problemas en el select:".mysqli_error($conexion));

  if($reg=mysqli_fetch_array($registros))
  {
  echo "<progress value= " .$reg['PORCENTAJE']. " max= '100' ></progress>";
  echo "<br>";
  echo "<p>" .$reg['DESCRIPCION']. "</p>";
  }
  else
  {
      echo 'problem';
  }
mysqli_close($conexion);
?>
