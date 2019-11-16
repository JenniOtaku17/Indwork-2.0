<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie-edge">
    <link rel="shortcut icon" href="icono.png" />
    <link rel="stylesheet" href="css/buscar.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Inicio</title>
</head>
<?php
    include ('navbar.php');
?>
<body>


    <div class="contenedor ">
        <img src="img/buscar2.jpg" alt="" width="100%">
        <div class="buscador ">
            <h1 class="titulo">Buscas a un Profesional?</h1>
            <form action="" method="post"  autocomplete = "off" class="formulario" id = "form-search">
                
                <input type="text" name="op"   id = "op" class="buscador-text" placeholder="Dime el oficio que deseas buscar">
                
                <input type="text" name="filtro" id = "filtro" class="buscador-region"  placeholder="Busca por Region o Pais">
            </form>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
            <div id = "respuesta-q">
            
            
            </div>
       
            
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

    <script type = "text/javascript" src = "ajax.js"></script>
</body>

</html>
