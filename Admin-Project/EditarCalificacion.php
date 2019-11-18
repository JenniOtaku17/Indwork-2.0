<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie-edge">
<link rel="shortcut icon" href="img/icono.png"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/calificar.css" />
<title>Calificar</title>
</head>

<body>

<?php

if(isset($_GET['id_re'])){
}
$id_contra = $_GET['id_contra'];
include 'conexion.php';
$registros=mysqli_query($conexion,"select COMENTARIO FROM evaluacion
                        where ID_CONTRA='$id_contra'") or
  die("Problemas en el select:".mysqli_error($conexion));
if ($reg=mysqli_fetch_array($registros))
{
?>

<section class="container">
	<div class="form-group w-75">
      <div align="left">
	<a href="vssolicitudes.php"><button  class="btn btn-primary mb-2 primary">Cancelar</button></a>
  </div>
	<h2 align="center">Calificar</h2><br>
	<form action="EditarCalificacion1.php?id_contra=<?php echo $id_contra ;?>" method="post">

    <div class="clasificacion">
          <input id="radio1" type="radio" name="estrellas" value="★★★★★" >
          <label for="radio1" style="cursor:pointer;" title="5 de 5">★</label>
          <input id="radio2" type="radio" name="estrellas" value="★★★★">
          <label for="radio2" style="cursor:pointer;" title="4 de 5">★</label>
          <input id="radio3" type="radio" name="estrellas" value="★★★">
          <label for="radio3" style="cursor:pointer;" title="3 de 5">★</label>
          <input id="radio4" type="radio" name="estrellas" value="★★">
          <label for="radio4" style="cursor:pointer;" title="2 de 5">★</label>
          <input id="radio5" type="radio" name="estrellas" value="★">
          <label for="radio5" style="cursor:pointer;" title="1 de 5">★</label>
        </div>
<br>
	<label class="mr-sm-2">Comentario:</label>
	<textarea rows="4" name="comentario" class="form-control mb-2 mr-sm-2" value="<?php echo $reg['COMENTARIO'] ?>"></textarea><br>

	<br>
   <div align="center" class="center">
	<input type="submit" class="enviar btn btn-primary " value="Enviar" class="btn btn-primary mb-2">
  </div>
	</form>
  </div>
</section>
<?php
}

?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
