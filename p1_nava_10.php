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
				<h3>Problema 1 de Katia Riojas/h3>
				<article class="articulos">	
					<figure>
						<img src="imagenes/ejercicio1.png" alt="">
					</figure>
					<h4>P1 Resultado del codigo</h4>
					<?php
						include "P6_RIOJAS_37/ejercicio1.php";
					?>
					<h4>P1 Explicacion del codigo</h4>
					<h4>este codigo utiliza la accion define para que el valor de una varable
						siempre sea el mismo en este caso "hola" y "3.14"
                   </h4>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>