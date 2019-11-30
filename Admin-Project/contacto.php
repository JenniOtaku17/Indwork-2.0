<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie-edge">
<link rel="shortcut icon" href="img/icono.png"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/contratar.css" />
<title>Contratar</title>
</head>

<body>

<?php
include ('navbar.php');

?>
<section class="container">
	<div class="form-group w-75">
    <br>
    <br>
    <br>
    <br>
    <br>
	<h1 align="center">Formulario de Contacto</h1><br><br>
	<form action="contacto1.php" method="post">

	<label class="mr-sm-2">Correo:</label>
	<input type="text" name="correo"  class="form-control mb-2 mr-sm-2"><br>

	<label class="mr-sm-2">Nombre:</label>
	<input type="text" name="nombre"  class="form-control mb-2 mr-sm-2"><br>

	<label class="mr-sm-2">Comentario:</label>
	<input type="text" name="comentario" class="form-control mb-2 mr-sm-2"><br>

	<br>
	<div align="center" class="center">
	<input type="submit" class="enviar btn btn-primary " value="Enviar" class="btn btn-primary mb-2">
</div>
	</form>
</div>
		</section>
<?php

?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
