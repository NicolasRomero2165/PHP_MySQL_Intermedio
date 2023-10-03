<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="assets/estilos_contacto.css" rel="stylesheet"/>
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
    <h2>Contáctenos - Unidad VIII</h2>

    <form action="enviar_consulta.php" method="POST">
        <input type="text" name="nombre" maxlength="30" placeholder="Introduzca su nombre" required>
        <input type="text" name="apellido" maxlength="50" placeholder="Introduzca su apellido" required>
        <input type="email" name="correo" maxlength="100" placeholder="Introduzca su correo electrónico" required>
        <input id="enviar_consulta" name="consulta" type="submit" value="ENVIAR CONSULTA">
        <textarea name="consulta" maxlength="500" placeholder="Escriba aquí su consulta" required></textarea>
    </form>

    <?php
        if(isset($_GET['ok'])) {
            echo "<p>Su consulta fue enviada exitosamente.</p>";
        };
    ?>
    </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>