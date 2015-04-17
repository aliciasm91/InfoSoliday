<html>
<head>
	<title>Comentario</title>
	<meta charset='utf-8'>
</head>
<body>
	<?= form_open("/usuarios_controller/getComentar")?>
	<?php
		$id_usuario_comentado	= array('name' => 'id_usuario_comentado');
		$titulo					= array('name' => 'titulo');
		$comentario				= array('name' => 'comentario');
		$anonimato				= array('name' => 'anonimato');
	?>

	<label>Usuario: <?= form_input($id_usuario_comentado) ?></label><br>
	<label>Título: <?= form_input($titulo) ?></label><br>
	<label>Comentario: <?= form_input($comentario) ?></label><br>
	<label>¿Quieres publicarlo como anónimo?: </label>
		<input type="checkbox" name='anonimato' id='anonimato' value=1 /><br>

	<?= form_submit('','Añadir comentario') ?>

	<?= form_close()?>
</body>
</html>