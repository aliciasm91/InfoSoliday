<html>
<head>
	<title>Nuevo Artículo</title>
	<meta charset='utf-8'>
</head>
<body>

	<?= form_open("/articulos_controller/getNewArticulo")?>
	<?php
		$imagen		= array('name' => 'imagen');
		$descripcion= array('name' => 'descripcion');
		$anonimato	= array('name' => 'anonimato');

		$id_categoria= array('name' => 'id_categoria');
	?>

	<label>Imagen: <input type="file" name="imagen"> </label><br>
	<label>Descripción: <?= form_input($descripcion) ?></label><br>
	
	<label>Categorías: </label>
		<?PHP if($categorias){
			foreach ($categorias->result() as $categoria){ ?>
				<input type="checkbox" name='id_categoria[]' id='id_categoria[]' value=<?= $categoria->id; ?> /> <?= $categoria->nombre; ?>
		<?PHP }
		}else echo 'No hay datos.';?>
		<br>

	<label>¿Quieres publicarlo como anónimo?: </label>
		<input type="checkbox" name='anonimato' id='anonimato' value=1 /><br>

	<?= form_submit('','Añadir Artículo') ?>

	<?= form_close()?>
</body>
</html>