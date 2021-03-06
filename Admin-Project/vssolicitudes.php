<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="css/fontawesome.min.css" rel="stylesheet">
<link href="fontawesome/css/brands.css" rel="stylesheet">
<link href="fontawesome/css/solid.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  body {
    position: relative;
  }
  ul.nav-pills {
    top: 20px;
    position: fixed;
  }
  div.col-8 div {
    height: 500px;
  }
  </style>
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="1">

<div class="container-fluid">
  <div class="row">
    <nav class="col-sm-3 col-4" id="myScrollspy">
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#section1">Trabajos Recibidos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section2">Solicitudes de Trabajo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section3">Trabajos en progreso (emitidos)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section4">Trabajos en progreso (recibidos)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section5">Trabajos Realizados</a>
        </li>

      </ul>
    </nav>
    <div class="col-sm-9 col-8">

    <!-- section 1 -->
      <div id="section1"> 
      <br><h2 align="center" class="tema-tabla">Trabajos Recibidos</h2><br>
  <table class = 'table table-stripped'>

 <thead>

<tr>

<th>Facilitador</th>
<th>Asunto</th>
<th>Descripcion</th>
<th>Valorar</th>

</tr>
</thead>

<tbody>

<?php 
include ('conexion.php');
session_start();
$id = $_SESSION['user'];

mysqli_set_charset($conexion,'utf8');
$registrost=mysqli_query($conexion,"Select c.ID,c.ID_RECEPTOR, c.ID_EMISOR, p.NOMBRE , p.APELLIDO, c.DESCRIPCION, c.ASUNTO, c.ESTADO
From contratos c inner join profesional p
On c.ID_RECEPTOR = p.ID
 where ID_EMISOR = '$id' and FECHA_FIN != ' ' and (ESTADO = 'Terminado' or ESTADO = 'Valorado' )") or
  die("Problemas en el select:".mysqli_error($conexion));


while($tr =mysqli_fetch_array($registrost)){

  $id_contra= $tr['ID'];

echo"

<tr>

<td>{$tr['NOMBRE']} {$tr['APELLIDO']}</td>
<td>{$tr['ASUNTO']}</td>
<td>{$tr['DESCRIPCION']}</td>";

if($tr['ESTADO'] == 'Valorado') {
  echo "<td> <a href ='EditarCalificacion.php?id_contra=".$id_contra."' class ='btn btn-primary'>Editar Valoracion</a> </td>

  </tr>";
}else{
  echo "<td> <a href ='calificar.php?id_contra=".$id_contra."' class ='btn btn-primary'>Valorar Trabajo</a> </td>

  </tr>";
}

}

?>

</tbody>

</table>

      </div>

      <!-- section 2 -->
      <div id="section2"> 
      <br><h2 align="center" class="tema-tabla">Solicitudes de Trabajos</h2><br>
      <table class = 'table table-stripped'>
      
<thead>

<tr>

<th>Contratante</th>
<th>Asunto</th>
<th>Descripcion</th>
<th>Aceptar</th>
<th>Rechazar</th>
</tr>

</thead>

<tbody>

<?php 


$registrost=mysqli_query($conexion,"Select c.ID, c.ID_EMISOR, p.NOMBRE , p.APELLIDO, c.DESCRIPCION, c.ASUNTO
From contratos c inner join profesional p
On c.ID_EMISOR = p.ID
 where id_receptor = '$id' and (ESTADO= ' ' or ESTADO = 'visto')") or
  die("Problemas en el select:".mysqli_error($conexion));

while($tr =mysqli_fetch_array($registrost)){

$id_contra = $tr['ID'];
$aceptar = 'aceptar';
$rechazar = "rechazar";

mysqli_query($conexion,"update contratos set ESTADO = 'visto' where ESTADO =' ' and ID = $id_contra ")
  or die("Problemas en el select".mysqli_error($conexion));

echo"

<tr>

<td>{$tr['NOMBRE']} {$tr['APELLIDO']}</td>
<td>{$tr['ASUNTO']}</td>
<td>{$tr['DESCRIPCION']}</td>
<td> <a href ='solicitudes.php?id=".$id_contra."&estado=".$aceptar."&usuario=".$id."' class ='btn btn-success'>O</a> </td>
<td> <a href ='solicitudes.php?id=".$id_contra."&estado=".$rechazar."' class ='btn btn-danger'>X</a> </td>

</tr>";

}

?>

</tbody>
</table>
      </div>  

      <!-- section 3 -->    
      <div id="section3">         
      <br><h2 align="center" class="tema-tabla">Trabajos en Progreso (emitidos)</h2><br>
  <table class = 'table table-stripped'>

  <thead>

  <tr>

  <th>Contratante</th>
  <th>Asunto</th>
  <th>Descripcion</th>
  <th>Fecha</th>
  <th>Terminar Trabajo</th>
  <th>Avances</th>
  </tr>

  </thead>

  <tbody>
  <?php 

$rg=mysqli_query($conexion,"Select c.ID, sum(a.PORCENTAJE), c.ID_EMISOR, c.FECHA_INICIO, p.NOMBRE , p.APELLIDO, c.DESCRIPCION, c.ASUNTO From contratos c inner join profesional p On c.ID_EMISOR = p.ID inner join avances a On c.ID = a.ID_CONTRA where c.id_receptor ='$id' and c.ESTADO= 'Aceptado' group by c.ID") or
  die("Problemas en el select:".mysqli_error($conexion));

while($tb =mysqli_fetch_array($rg)){

$id_contra = $tb['ID'];
$terminar = 'terminar';

echo"<tr>
<td>{$tb['NOMBRE']} {$tb['APELLIDO']}</td>
<td>{$tb['ASUNTO']}</td>
<td>{$tb['DESCRIPCION']}</td>
<td>{$tb['FECHA_INICIO']}</td>
<td> <a href ='avances.php?id=".$id_contra."' class ='btn btn-primary'>+Avance</a>
<a href ='solicitudes.php?id=".$id_contra."&estado=".$terminar."&usuario=".$id."' class ='btn btn-primary'>Terminar</a> </td>
</th><th><a href ='avances2.php?id=".$id_contra."' class ='btn btn-primary'>Mis avances</a><progress value= ".$tb['sum(a.PORCENTAJE)']." max= '100' ></progress>

</tr> ";   

}

?>

</tbody>
</table>
<br>
      </div>

            <!-- section 4 -->    
            <div id="section4">         
      <br><h2 align="center" class="tema-tabla">Trabajos en Progreso (Recibidos)</h2><br>
  <table class = 'table table-stripped'>

  <thead>

  <tr>

  <th>Contratado</th>
  <th>Asunto</th>
  <th>Descripcion</th>
  <th>Fecha</th>
  <th>Avances</th>

  </tr>

  </thead>

  <tbody>
  <?php 

$rg=mysqli_query($conexion,"Select c.ID, sum(a.PORCENTAJE), c.ID_RECEPTOR, c.FECHA_INICIO, p.NOMBRE , p.APELLIDO, c.DESCRIPCION, c.ASUNTO From contratos c inner join profesional p On c.ID_RECEPTOR = p.ID inner join avances a On c.ID = a.ID_CONTRA where c.ID_EMISOR ='$id' and c.ESTADO= 'Aceptado' group by c.ID") or
  die("Problemas en el select:".mysqli_error($conexion));

while($tb =mysqli_fetch_array($rg)){

$id_contra = $tb['ID'];

echo"

<tr>

<td>{$tb['NOMBRE']} {$tb['APELLIDO']}</td>
<td>{$tb['ASUNTO']}</td>
<td>{$tb['DESCRIPCION']}</td>
<td>{$tb['FECHA_INICIO']}</td>
<th><a href ='avances3.php?id=".$id_contra."' style='color: green;'><i class='fas fa-circle-notch'></i> Ver avances</a><progress value= ".$tb['sum(a.PORCENTAJE)']." max= '100' ></progress>

</tr>";

}

?>

</tbody>
</table>

      </div>

      <!-- section 5 -->
      <div id="section5">         
      <br><h2 align="center" class="tema-tabla">Trabajos Realizados</h2><br>
  <table class = 'table table-stripped'>

<thead>

<tr>

<th>Contratante</th>
<th>Asunto</th>
<th>Descripcion</th>
<th>Fecha Inicio</th>
<th>Fecha Final</th>
</tr>

</thead>

<tbody>
<?php 
mysqli_set_charset($conexion,'utf8');
$rg=mysqli_query($conexion,"Select c.ID, c.ID_EMISOR,c.FECHA_INICIO,c.FECHA_FIN, p.NOMBRE , p.APELLIDO, c.DESCRIPCION, c.ASUNTO
From contratos c inner join profesional p
On c.ID_EMISOR = p.ID
where id_receptor = '$id' and (ESTADO= 'Terminado' or ESTADO = 'Valorado')") or
die("Problemas en el select:".mysqli_error($conexion));

while($tb =mysqli_fetch_array($rg)){

echo"

<tr>

<td>{$tb['NOMBRE']} {$tb['APELLIDO']}</td>
<td>{$tb['ASUNTO']}</td>
<td>{$tb['DESCRIPCION']}</td>
<td>{$tb['FECHA_INICIO']}</td>
<td>{$tb['FECHA_FIN']}</td>


</tr>";

}

?>

</tbody>
</table>

      </div>
    </div>
    </div>
    </div>

</body>
</html>
