<!doctype html>
<html>
<head>
<link rel="shortcut icon" href="img/icono.png"/>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/default.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/semantic.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/bootstrap.min.css"/>
<title>INDWORK</title>
</head>

<body>
<?php
session_start();
session_destroy();

echo "
<script>
alertify
  .alert('INDWORK aviso','Acabas de cerrar sesion', function(){
    alertify.message('OK');
    window.location= 'index.php';
  });
 </script>";
?>
</body>
</html>
