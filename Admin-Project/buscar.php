<?php
    include ('navbar.php');
?>
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

.titulo {
    text-align: center;
    color: black;
    /*padding: 10% 0;*/
    /*margin: 10px;*/
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

.cont-buscar{
    width: 50%;
    margin: 150px auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: white;
}

.img-buscar{
    width: 100%;
    max-width: 300px;
}

</style>

<body>
    <div class="contenedor ">
        <!--<img src="img/buscar2.jpg" alt="" width="100%">-->
        <div class="buscador ">

            <form action=""  autocomplete= "off" class="formulario" id= "form-search">
                
    <input align="center" type="text" name="op" method="post"  id = "op" class="buscador-text" placeholder="Dime el oficio que deseas buscar">
                
            </form>
            </div>
       
<br>

            <div id = "respuesta-q">
                <div class="cont-buscar">
                    <img src="img/infopro.png" class="img-buscar">
                    <h1 class="titulo">Buscas a un Profesional?</h1>
                </div>
            
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type = "text/javascript" src = "ajax.js"></script>
  
 
</body>

</html>
