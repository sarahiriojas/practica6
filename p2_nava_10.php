<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Proyectos</title>
	<?php
		include "includes/estilo.php";
	?>
</head>
<body>
	<?php
		include "includes/header.php";
		include "includes/nav.php";
		include "includes/slider.php";
	?>
	<section class="contenido">
				<h3>Problema 2 de Katia Riojas</h3>
				<article class="articulos">	
					<figure>
						<img src="imagenes/ejercicio2.png" alt="">
					</figure>
					<h4>P2 Resultado del codigo</h4>
					<?php
						include "P6_RIOJAS_37/ejercicio2.php";
					?>
					<h4>P2 Explicacion del codigo</h4>
					<p>
						este ejercico nos enseña la manera de que una cadena de texto
						tenga saltos de linea sin utilizar codigo fuera de la cadena de texto
					</p>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>