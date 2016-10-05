<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Todos los libros</title>
</head>
<body>
	<?php foreach ($articulos as $libro): ?>
		<p>
			<?=$libro['nombre']?>, por <?=$libro['descripcion']?>
		</p>
	<?php endforeach ?>
</body>
</html>