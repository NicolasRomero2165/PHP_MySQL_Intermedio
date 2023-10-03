<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="assets/estilos_catalogo.css" rel="stylesheet"/>
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
    <h2>Catálogo - Unidad V</h2>
        <nav id="botonera_productos">
        	<ul>
            	<li><a href="catalogo.php?producto=sillon">Sillón Capri</a></li>
                <li><a href="catalogo.php?producto=mesa">Mesa Ipanema</a></li>
                <li><a href="catalogo.php?producto=banco">Banco Venecia</a></li>
            </ul>
        </nav>
            <?php if (isset ($_GET['producto'])) { ?>
            <?php 
                switch ($_GET['producto']) {
                    case 'sillon':
                        $producto = 'Sillón Capri';
                        $precio = '$ 345.00';
                        $caracteristica = 'Concebida para ser utilizada tanto bajo techo como a la intemperie. La madera de origen brasilera está acabada con un recubrimiento de Resina Polisten que la embellece.';
                        $imagen = 'sillon1.jpg';
                    break;
                    case 'mesa':
                        $producto = 'Mesa Ipanema';
                        $precio = '$ 500.00';
                        $caracteristica = 'Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC y concebida para ser utilizada tanto bajo techo como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.';
                        $imagen = 'ipanema.jpg';
                    break;
                    case 'banco':
                        $producto = 'Banco Venecia';
                        $precio = '$ 450.00';
                        $caracteristica = 'Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC (SWCOC-091) y concebida para ser utilizada tanto bajo techado como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.';
                        $imagen = 'venecia.jpg';
                    break;                    
                    default:
                        $producto = 'No disponible';
                        $precio = '$ 0.00';
                        $caracteristica = 'El producto seleccionado no se encuentra en el catálogo.';
                        $imagen = 'alerta.png';
                    break;
                }
            ?>
        <div id="texto">
            <h3><?php echo $producto; ?></h3>
            <p><?php echo $caracteristica; ?></p>
        </div>
        <img id="img_producto" src="imagenes/<?php echo $imagen ?>">
        <span id="precio"><?php echo $precio ?></span>
    <?php } ?>
    </section>      
<footer>
<p>Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></p>
</footer>
</section>
</body>
</html>