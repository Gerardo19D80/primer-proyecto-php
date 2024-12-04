<?php
$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$edad_form = $_POST['edad'];
$email_form = $_POST['email'];
$mensaje_form = $_POST['mensaje'];

//conexion a la base de datos


//conexion desde el localhost
//$conexion = mysqli_connect('localhost', 'root', '', 'proyecto-educativo') or exit ("No se pudo conectar a la base de datos");

//conexion desde infinityfree
$conexion = mysqli_connect('sql202.infinityfree.com', 'if0_37617919', 'OHpEaoFTyC', 'if0_37617919_proyectoeducativo') or exit ("No se pudo conectar a la base de datos");


mysqli_query($conexion, "INSERT INTO consultas VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$edad_form', '$email_form', '$mensaje_form')");

mysqli_close($conexion);

header("Location: contacto.php?ok");

