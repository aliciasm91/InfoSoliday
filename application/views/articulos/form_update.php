<html>
<head>
	<title>Modificar POI</title>
	<meta charset='utf-8'>
</head>
<body>
	<?= form_open("/articulos_controller/getUpdateArticulo/".$id)?>
	<?php
		$imagen		= array('name' => 'imagen', 'value' 		=> $articulo->result()[0]->imagen);
		$descripcion= array('name' => 'descripcion', 'value'	=> $articulo->result()[0]->descripcion);
		$anonimato	= array('name' => 'anonimato', 'value' 		=> $articulo->result()[0]->anonimato);

		$id_categoria= array('name' => 'id_categoria');
	?>

	<label>Imagen: <?= form_input($imagen) ?></label><br>
	<label>Descripción: <?= form_input($descripcion) ?></label><br>
	<label>¿Quieres publicarlo como anónimo?: </label>
		<input type="checkbox" name='anonimato' id='anonimato' value='TRUE' /><br>
	
	<label>Categoría: </label>
		<?PHP if($categorias){
			foreach ($categorias->result() as $categoria){ 
				$bool = 0;
			 	foreach ($categorias_poi->result() as $is){ 
					if($categoria->id == $is->id_categoria){
						$bool = 1;
					}
				} ?>
				<input type="checkbox" name='id_categoria[]' id='id_categoria[]' value=<?= $categoria->id; ?> 
				<?php if($bool){ ?>
					checked  
				<?php } ?>
				/> <?= $categoria->nombre; ?>
		<?PHP }
		}else echo 'No hay datos.';?>
	</select><br>

	<?= form_submit('','Actualizar Artículo') ?>

	<?= form_close()?>
</body>
</html>