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
<?php 

include ('conexion.php');
session_start();
if($_SESSION['user']){

  $id = $_SESSION['user'];
  $notificaciones =  mysqli_query($conexion,"Select ID from contratos
  where id_receptor = '$id' and ESTADO= ' '") or
    die("Problemas en el select:".mysqli_error($conexion));

  $count = 0;
    while($cantidad =mysqli_fetch_array($notificaciones)){
      $count = $count +1;
    } 

  $avances =  mysqli_query($conexion,"Select a.ID from avances a inner join contratos c on c.ID = a.ID_CONTRA where c.id_emisor = '$id' and a.ESTADO= ' ' group by a.ID") or
    die("Problemas en el select:".mysqli_error($conexion));

  $avs = 0;
    while($avance =mysqli_fetch_array($avances)){
      $avs = $avs +1;
    }

  if ($count>0){

    echo'<script src="js/push.min.js"></script>
    hola
    <script>
      window.onload = function(){
        Push.Permission.request();
      }
      Push.create("INDWORK",{
            body:"Tienes nuevas solicitudes",
            icon: "img/icono.png",
            timeout: 4000,
            onClick: function(){
              this.close();
            }
          });
    </script>';
  }
  
  if ($avs>0){

    echo'<script src="js/push.min.js"></script>
    hola
    <script>
      window.onload = function(){
        Push.Permission.request();
      }
      Push.create("INDWORK",{
            body:"Tienes nuevos avances",
            icon: "img/icono.png",
            timeout: 8000,
            onClick: function(){
              this.close();
          }});
    </script>';
  }
}
?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
