<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="assets/estilos_noticias.css" rel="stylesheet"/>
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
    <h2>Noticias - Unidad VI</h2>

    <h2 id="titulo_noticias">ÚLTIMAS NOVEDADES</h2>

    <?php
        $noticia = array(
            array("Baldur's Gate 3", "RPG", "¿Será el próximo juego del año? Baldur's Gate considerado como el juego RPG (Rol Player Game) por excelencia y lo más cercano que tiene el usuario a una experienca al juego de mesa 'Dugeons & Dragons' en formato videojuego. Crea tu propio personaje, forma un grupo de luchadores, viaja por un enorme mapa repleta de enemigos y aliados e influye en cambiar la historia del dependiendo de tus propias acciones. <br/><br/> Con tu ayuda, ¿Reinará el caos o la paz? ¿Buscarás ayudar a los demás o solo te interesará beneficiarte a tí mismo? ¿Serás recordado como un magio sabio, un hábil luchador, un sigiloso ladrón, un enano camorrero, un elfo influenciador, un muertoviviente amigable o un reptiliano malvado? Tú tendrás la última decisión en esta épica historia.", "baldur.jpg"),
            array("Blasphemous 2", "Metroidvania", "The Game Kitchen nos trae una secuela digna del Penitente Uno, donde matará a cualquiera que se interponga en su camino para liberarnos del milagro que viene azotando al planeta hace siglos y a él también que fue bendecido con la inmortalidad, donde vive, muere y resucita incontables veces. Tendrá que adentrarse a explorar una tierra olvidada y lleno de secretos junto con todo un arsenal y habilidades mágicas nuevas para enfrentarse a incontables ordas grotescas de enemigos y jefes poderosos que intentarán que no logra cumplir su cruzada <br/><br/> Basado en el folclore de la religión cristiana, en un mundo donde los habitantes de Cvstodia están sucumbidos por la fé y el miedo, esperan que el milagro ocurra en sus vidas para ponerle fin a su castigo infinito al ser pecadores ante la presencia de un Dios sin piedad.", "blas.jpg"),
            array("Holstin", "Survival", "Un videojuego indie hecho de pixel art, con una mezcla entre cámara isométrica 3D para la exploración y la vista al hombro en momentos donde tendremos que apretar el gatillo para acabar con nuestros enemigos, está haciendo bastante ruido en el mundo de los jueguitos al ser algo totalmente novedoso y fuera de lo común. <br/><br/> De la mano de estudio Sonka, Holstin nos meterá en una ciudad Polaca ambientada en los años 90, donde trataremos de sobrevivir ante una presencia inquietante donde sus habitantes están poseídos por repugnante, la cuál intentarán matarnos. Tendrás que explorar la ciudad en busca de recursos y armamento para sobrevivir ante la oleadas de gente poseída, encontrar supervivientes locales que te den ayuda y respuestas para poder descubrir la verdad de este horrible suceso.", "holstin.jpg"),
            array("Mortal Kombat 1", "Lucha", "NetherRealms Studios una vez más nos trae de vuelta su saga mítica de peleas Mortal Kombat, ahora llamado 1 que supondría el reinicio de la saga cronológicamente pero con novedades en su sistema de pelea. Trayendo una historia completamente nueva, la posibilidad de intercambiar entre 2 personajes durante el combate y, lo que nunca puede faltar, toda una nueva serie de Fatalitys llenos de violencia y sangre. <br/><br/> Este nuevo universo de Mortal Kombat se encuentra bajo el dominio de Liu Kang, el Dios del fuego. Raiden y Kung Lao ahora se dedican a una vida tranquila en la granja, Mileena y Kitana parece que cooperarán para estar cargo del nuevo reino, Sub-Zero y Scorpion dejarán su eterna venganza por un rival en común y Shang Sung volverá a ser quién querra terminar con el tiempo de paz.", "mk1.jpg"),
        );
    ?>

    <?php
    for ($i=0; $i < count($noticia); $i++) { ?>
        <div class="contenedor_noticias">
            <div class="texto_noticias">
                <div class="nombre_juego">
                    <h3><?php echo $noticia[$i][0];?> <span class="genero"><?php echo $noticia[$i][1];?></span></h3>
                </div>
                <p><?php echo $noticia[$i][2];?></p>
            </div>
            <div class="imagen_noticias">
                <img class="ajustar" src="imagenes/<?php echo $noticia[$i][3];?>">
            </div>
        </div>
    <?php } ?>
    </section>

<footer>
<p>Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>