<?php
	    include ('navbar.php');
    ?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie-edge">
    <link rel="shortcut icon" href="img/icono.png"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/registrar.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Registrarse</title>
</head>

<body>

    <!-----------------Navigation------------------->

    <style>

*{
    box-sizing: border-box;
}

h1{
font-size: 2em;
}
.contenedor-registrar{
    width: 100%;
}

@media screen and (max-width: 600px){
    .contenedor-registro {
width: 98%;
margin: 50px auto;
display: flex;
flex-direction: column;
flex-wrap: wrap;
-webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none
}

.contenedor-registro input{
width: 98%;
}

.zona-izquierda {
width: 100%;
}

.flex-zona-izquierda {
display: flex;
flex-direction: column;
flex-wrap: nowrap;
align-content: center;
justify-content: center;
}

input[type="radio"]{
width: 20%;
}

.zona-derecha {
width: 100%;
}

.abajo-flex {
display: flex;
flex-direction: column;
flex-wrap: nowrap;
}

.subtitulo {
/*width: 80%;*/
font-size: 1.2em;
margin: 5px auto;
text-align: center;
}

.contenedor-registro label{
font-size: 1em;
}

.vl2 {
border-right: none;
height: 0;
border-bottom: 1px solid gray;
width: 90%;
margin: 5% auto;
padding: 2%;
}
}

</style>


    <br>

    <!--------------------Container------------------------>

    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="form-group ">
                <!--w-75-->
                <br>
                <br>
                <br>
                <br>
                <br>
                <h1 align="center">REGISTRAR USUARIO</h1>
                <br>
                <br>
                <br>

                <form action="registrar1.php" method="post" enctype="multipart/form-data">

                    <!-----------------Datos Personales------------------->

                    <div class="contenedor-registro ">
                        <div class="flex-zona-izquierda zona-izquierda ">
                            <img src="img/user-solid.svg" alt="">
                            <p class="subtitulo">Datos Personales</p>
                        </div>
                        <div class="vl2"> </div>
                        <div class="flex-columna zona-derecha ">
                            <div class="arriba ">
                                <label>Cedula:</label>
                                <input type="text" name="cedula" class="form-control" required><br>
                            </div>

                            <div class="abajo abajo-flex ">
                                <div class=" nombre">
                                    <label>Nombre:</label>
                                    <input type="text" name="nombre" class="form-control" required><br>
                                </div>
                                <div class="espacio"></div>
                                <div class=" nombre">
                                    <label>Apellido:</label>
                                    <input type="text" name="apellido" class="form-control" required><br>
                                </div>
                            </div>
                            <div class="arriba ">
                                <label>Facebook:</label>
                                <input type="text" name="fb" class="form-control" placeholder="Ingresa el link de tu perfil" required><br>
                            </div>
                        </div>
                    </div>
                    <!-----------------Datos Profesionales------------------->

                    <div class="contenedor-registro ">
                        <div class="flex-zona-izquierda zona-izquierda ">
                            <img src="img/datos-profesionales.svg" alt="">
                            <p class="subtitulo">Datos Profesionales</p>
                        </div>
                        <div class="vl2"> </div>
                        <div class="flex-columna zona-derecha ">
                            <div class="arriba">
                                <label>Oficio o Profesion:</label>
                                <input type="text" name="oficio" class="form-control responsive-80"><br>

                                <label>Tipo de usuario:   </label>
                                <input type="radio" name="tipodeusuario" value="PRO" required> Para contratar
                                <input type="radio" name="tipodeusuario" value="CLI" required> Cliente
                                <br>
                                <br>

                                <label>Tu Foto:</label>
                                <input style="border: 2px dotted #169BD5; padding: 5px;" type="file" name="foto" accept="image/*" /><br><br>

                                <label>Tu Curriculum:</label>
                                <input style="border: 2px dotted #169BD5; padding: 5px;" class="archivo" type="file" name="cv" accept="application/pdf" /><br><br>
                            </div>
                        </div>
                    </div>
                    <!-----------------Datos Nacionales------------------->

                    <div class="contenedor-registro ">
                        <div class="flex-zona-izquierda zona-izquierda ">
                            <img src="img/flag-solid.svg" alt="">
                            <p class="subtitulo">Datos Nacionales</p>
                        </div>
                        <div class="vl2"> </div>
                        <div class="flex-columna zona-derecha ">
                            <div class="arriba">
                                <label>Pais:</label>
                                <input type="text" name="pais" class="form-control" required><br>

                                <label>Region:</label>
                                <input type="text" name="region" class="form-control"><br>

                                <label>Telefono:</label>
                                <div class="input-group mb-3">
                                <input type="text" name="prefijo" class="form-control" placeholder="Prefijo Ej: +1"><br>
                                <input type="text" name="telefono" class="form-control" placeholder="Numero telefonico"><br>
                                </div>
                                <label>Direccion:</label>
                                <input type="text" name="direccion" class="form-control"><br>
                            </div>
                        </div>
                    </div>
                    <!-----------------Tu Cuenta------------------->

                    <div class="contenedor-registro ">
                        <div class="flex-zona-izquierda zona-izquierda ">
                            <img src="img/cuenta.svg" alt="">
                            <p class="subtitulo">Tu Cuenta</p>
                        </div>
                        <div class="vl2"> </div>
                        <div class="flex-columna zona-derecha ">
                            <div class="arriba">
                                <label>Ingrese el correo:</label>
                                <input type="text" name="correo" class="form-control mb-2 mr-sm-2" required><br>

                                <div class="abajo abajo-flex ">
                                    <div class=" nombre">
                                        <label>Contraseña:</label>
                                        <input type="password" name="password" class="form-control mb-2 mr-sm-2" required><br>
                                    </div>
                                    <div class="espacio"></div>
                                    <div class=" nombre">
                                        <label>Confirmar Contraseña:</label>
                                        <input type="password" name="repassword" class="form-control" required><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-----------------Sobre ti------------------->

                    <label>Cuentanos mas acerca de ti:</label>
                    <textarea name="me" rows="5" class="form-control"></textarea>

                    <div align="center" class="center">
                        <input type="submit" class="enviar boton boton-registro" value="REGISTRAR" name="registrar" align="center" class="btn btn-primary mb-2">
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>