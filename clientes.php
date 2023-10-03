<?php session_start(); ?>
<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="assets/estilos_clientes.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor">
	<header>
    	<nav id="botonera_principal">
        	<ul>
            	<li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="noticias.php">Noticias</a></li><li><a href="clientes.php">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Clientes - Unidad VII</h2>

    <form action="validar_cliente.php" method="post">
        <input type="email" name="correo" maxlength="100" placeholder="Ingrese su correo electrónico">
        <input type="password" name="pass" placeholder="Ingrese su contraseña">
        <input type="submit" value="CONECTAR" id="conectar">
        <button id="salir"><a href="salir.php">SALIR</a></button>
        <br/>
    </form>

    <?php if (isset($_SESSION['conectado'])) { ?>        
        <?php include('contenido_clientes.php') ?>
    <?php } ?>

    </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>