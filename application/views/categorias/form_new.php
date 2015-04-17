<html>
<head>
	<title>Nueva Categoría</title>
	<meta charset='utf-8'>
</head>
<body>
	<?= form_open("/categorias_controller/getNewCategory")?>
	<?php
		$nombre	= array('name' => 'nombre');
	?>
	<label>Nombre: <?= form_input($nombre) ?></label><br>

	<?= form_submit('','Añadir categoría') ?>

	<?= form_close()?>
</body>
</html>