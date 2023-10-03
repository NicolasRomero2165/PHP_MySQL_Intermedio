<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
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
        	<h1>Programador Web con PHP y MySQL<br/>Nivel Intermedio</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Unidad IV - Introducción a PHP</h2>
    <div id="uni4_1">
        <?php
            echo '<h3> Objetivos que el alumno logre: </h3>';
            echo 'Aprender los conceptos de tabla, columna, fila o registro y valor de un dato dentro de la tabla, además de aprender a definir una llave o clave primaria y cuál es el propósito de la misma en un plazo de <strong>2 meses</strong>.';
            echo ' Esto sería para cumplir con el nivel intermedio, luego vendrá el avanzado que también abarcará 2 meses más.';
        ?>
    </div>
    <div id="uni4_2">
        <?php
            echo 'EVALUACIÓN';
            echo '<br/>';
            echo 'INTEGRADORA';
            echo '<br/>';
            echo 'PHP y MySQL';
        ?>
    </div>
    <div id="uni4_3">
        <?php
            $entero = 4;
            $cadena = 'Se espera que el alumno logre aprobar los exámenes semanales y al final la evaluación integradora.';
            $booleano = True;

            echo 'El curso dura '.$entero.' meses en total, entre el nivel intermedio y avanzado. <br/>';
            echo $cadena.'<br/>';
            echo $booleano.' es la cantidad de reintentos que tiene el alumno para volver a realizar el exámen.'
        ?>
    </div>
    <div id="uni4_4">
        <?php
            $a = 5;
            $b = 10;
            $c = 7;

            echo 'Número A: '.$a.'<br/>';
            echo 'Número B: '.$b.'<br/>';
            echo 'Número C: '.$c.'<br/>';

            echo $a.' * '.$b.' - '.$c.'<br/>';

            echo 'Resultado: '.$a * $b - $c;
        ?>
    </div>
    </section>

<footer>
<p>Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>