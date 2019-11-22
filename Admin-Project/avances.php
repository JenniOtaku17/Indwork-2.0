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

<section class="container">

	<div class="form-group w-75">
    <br>
<br>
<br>
<br>
<br>
<?php
if(isset($_GET['id_contra'])){

$id_contra= $_GET['id_contra'];

echo '<h2 align="center">Da a conocer tu avance!</h2><br>
	<form action="avances1.php?id_contra=<?php echo $id_contra; ?>" method="post">

	<label class="mr-sm-2">Porcentaje Avanzado:</label>
	<input name="porcentaje" class="form-control mb-2 mr-sm-2"></textarea><br>
    <label class="mr-sm-2">Descripcion:</label>
	<input name="descripcion" class="form-control mb-2 mr-sm-2"></textarea><br>

	<br>
   <div align="center" class="center">
	<input type="submit" class="enviar btn btn-primary " value="Enviar Contraseña" class="btn btn-primary mb-2">
  </div>
	</form>
  </div>
</section>';
}
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
