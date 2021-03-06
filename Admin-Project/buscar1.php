<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie-edge">
<link rel="stylesheet" href="css/buscar.css">
<link rel="stylesheet" href="css/style.css">
<link rel="shortcut icon" href="icono.png" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body>




<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<section class="container" align="center" >
  <h1>Perfiles Recomendados</h1><br>
  <hr>

<style>

.boton-perfil {
        background-color: #169BD5;
        padding: 3%;
        color: white;
        border-radius: 25px;
        transition-duration: 0.5s;
        margin: 5px auto;
        border: 2px solid #169BD5;
        text-align: center;
        font-size: 1em;
        width: 90%;
  }

* { box-sizing:border-box; }

.valoracion{
	width: 100%;
	display: block;
	flex-direction: column;
	flex-wrap: nowrap;
}

.minimenu{
	width: 100%;
}

.visitar{
  width: 20%;
  margin: auto;
}

.buscador-text {
    width: 100%;
    border-style: none;
    outline: none;
    background-color: white;
    border: 1px solid white;
    border-radius: 50px;
    padding: 10px;
    transition-duration: 0.4s;
    -webkit-box-shadow: -1px 7px 16px -6px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: -1px 7px 16px -6px rgba(0, 0, 0, 0.75);
    box-shadow: -1px 7px 16px -6px rgba(0, 0, 0, 0.75);
}

.buscador-text:focus {
    border: 2px solid #169BD5;
    transition-duration: 0.4s;
}

	@media screen and (max-width: 800px){
		.cuadro {
    width: 100%;
    margin: 75px auto;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
}
.foto {
    width: 80%;
    max-width: 200px;
    border-radius: 200px;
	clip-path: circle(40% at 50% 50%);
	margin: 0px auto;
}

.visitar{
  width: 90%;
  margin: 10px auto;
}

.cuadro-izquierda {
	width: 100%;
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	justify-content: center;
	align-content: center;
	align-items: center;
}
.cuadro-derecha {
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.borde-oscuro {
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
	box-shadow: none;
	width: 100%;
    margin: 75px 0;
	display: flex;
	font-size: 1em;
    flex-direction: row;
	flex-wrap: nowrap;
	justify-content:baseline;
	align-items: baseline;
}

.datos-izquierda {
    display: flex;
    flex-direction: column;
	flex-wrap: nowrap;
	align-items: center;
    width: 29%;
}

.datos-derecha {
    display: flex;
    flex-direction: column;
	flex-wrap: nowrap;
	align-items: center;
    width: 100%;
}

.datos-d {
    text-align: left;
    width: 80%;
    margin: 20px auto;
    font-size: 1.1em;
    font-weight: 600;
}

.visible {
    display: none;
}

.invisible {
    display: block;
}

.datos-p {
    text-align: left;
    width: 80%;
    margin: 20px auto;
    font-size: 1em;
    font-weight: 300;
}

.valoracion{
	width: 100%;
	display: flex;
	flex-direction: column;
	flex-wrap: nowrap;
}
	}

</style>

<style>
* { box-sizing:border-box; }
.buscador {
    width: 100%;
    position: absolute;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    align-content: center;
    justify-content: center;
    align-items: center;
    position: fixed;
    height: 150px;
    z-index: 99;
}

.formulario {
    width: 100%;
    padding: 10px;
    position: fixed;
    z-index: 99;
    text-align: center;
    margin-top: 30px;
    background-color: #4B4A4A;
    -webkit-box-shadow: -1px 14px 24px -19px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 14px 24px -19px rgba(0,0,0,0.75);
box-shadow: -1px 14px 24px -19px rgba(0,0,0,0.75);
}

.buscador-text {
    width: 50%;
    border-style: none;
    outline: none;
    background-color: white;
    border: 1px solid white;
    border-radius: 50px;
    padding: 10px;
    margin: 0 auto;
    transition-duration: 0.4s;
    -webkit-box-shadow: -1px 7px 16px -6px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: -1px 7px 16px -6px rgba(0, 0, 0, 0.75);
    box-shadow: -1px 7px 16px -6px rgba(0, 0, 0, 0.75);
}

.buscador-text:focus {
    border: 2px solid #169BD5;
    transition-duration: 0.4s;
}

</style>


<?php


include ('conexion.php');

$buscar = '';

if(isset($_POST['op'])){

$buscar = $_POST['op'];

$registros=mysqli_query($conexion,"select NOMBRE,APELLIDO,OFICIO,FOTO, ID from profesional where OFICIO LIKE '%$buscar%' or NOMBRE  LIKE '%$buscar%' or REGION LIKE '$buscar' or PAIS like '%$buscar%' or ME LIKE '%$buscar%' or APELLIDO LIKE '%$buscar%'") or
  die("Problemas en el select:".mysqli_error($conexion));

  
//numero de personas por pagina
$personas_x_paginas = 4;

//numero de paginas
$personas = $registros->num_rows;
$paginas = $personas/$personas_x_paginas;
$paginas = ceil($paginas);


while ($reg=mysqli_fetch_array($registros))
{

   echo 
   '
   <div class="container">
    <table class="table tabla">
    <thead class="thead-light encabezado">
        <tr>

        </tr>
      </thead>
	<tbody>
    <tr>
    <div  class="container">

    <div class="cuadro">
		<div class="cuadro-izquierda ">
      <a href="perfil.php?id='.$reg['ID'].'">
      <img  class="foto" src="data:image/jpg;base64,'.base64_encode($reg['FOTO']).'" alt="">
      </a>
		</div>
		<div class="cuadro-derecha ">
			<div>
				<p class="nombre-perfil" >'.$reg['NOMBRE'].' '.$reg['APELLIDO'].'</p>
			</div>
			<div>
				<p class="oficio">'.$reg['OFICIO'].'</p>
			</div>
    </div>
    <div class="visitar centrado">
      <a class="boton nada" href="perfil.php?id='.$reg['ID'].'"> Visitar Perfil </a>
      </div>
    </div>
	</div>
  </tr></tbody></table></div>

  
  
  ';
  

}

echo '<nav aria-label="Page navigation example">
<ul class="pagination">
  <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
  ';
  for($i = 1; $i <= $paginas; $i++){ 
    echo '<li class="page-item"><a class="page-link" href="buscar.php?pagina='.$i.'">'.$i.'</a></li>';
  }
 echo '
  <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
</ul>
</nav>';
}

else{

echo "Revise los datos";

}


?>

	</section>
</body>
</html>
