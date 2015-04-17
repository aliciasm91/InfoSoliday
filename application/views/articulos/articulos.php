<!doctype html>
<html>
<head>
	<title>Listar Artículos</title>
	<meta charset='utf-8'>
</head>
<body>
	<?PHP
	if($articulos){
		foreach ($articulos->result() as $articulo){ ?>
		<ul>
			<li><?= $articulo->id; ?> <?= $articulo->imagen; ?> <?= $articulo->descripcion; ?> <?= $articulo->id_usuario; ?></li>
		</ul>
	<?PHP }
	}else echo 'No hay datos.';?>

</body>
</html>