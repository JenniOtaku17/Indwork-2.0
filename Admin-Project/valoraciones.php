<?php
echo'<h3>Valoraciones</h3>';
error_reporting(0);

include ('conexion.php');

mysqli_set_charset($conexion,'utf8');
$calificacion=mysqli_query($conexion,"select p.NOMBRE,p.APELLIDO,p.FOTO,c.ID_EMISOR,c.ID_RECEPTOR,p.ID,e.ID_CONTRA,e.COMENTARIO,e.FECHA,e.ESTRELLAS 
from evaluacion e inner join contratos c on e.ID_CONTRA = c.ID 
inner join profesional p on c.ID_EMISOR = p.ID 
where C.ID_RECEPTOR = '$id'") or
  die("Problemas en el select:".mysqli_error($conexion));


while($reg =mysqli_fetch_array($calificacion)){

  //while ($reg=mysqli_fetch_array($calificacion))
	echo '
	<div class="container" >
	<br><br>
	<div class="media border p-3">
	<img class="mr-3 mt-3 rounded-circle" height="110px" width="100px" src="data:image/jpg;base64,'.base64_encode($reg['FOTO']).'" alt="">
	<div class="media-body">
		<h4>'.$reg['NOMBRE'].' '.$reg['APELLIDO'].'  <small><i>'.' publicado en '.$reg['FECHA'].'</i></small></h4>
		<p>'.$reg['COMENTARIO'].'</p>
		<p class="Estrellas" > <h2> <font color="gold"> '.$reg['ESTRELLAS'].'</font></h2></p>
	</div>
	</div>
	</div>';
}
echo'<br><br><br><br>';

?>
