<?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $consulta = $_POST['consulta'];

    $bd = mysqli_connect('localhost', 'root', '', 'phpintermedio') or exit('No se pudo establecer una conexión con la base de datos.');

    mysqli_query($bd, "INSERT INTO consultas VALUES (DEFAULT, '$nombre', '$apellido', '$correo', '$consulta')");

    header("Location: contacto.php?ok");
?>