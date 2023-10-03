<?php
session_start();

$usuario = $_POST['correo'];
$password = $_POST['pass'];

if ($usuario == 'cliente@gmail.com' && $password == 'phpintermedio') {
   $_SESSION['conectado'] = $usuario;
   header('Location: clientes.php?conectado');
    } else {
        header('Location: clientes.php?error+al+conectar');
    }
?>