<!doctype html> 
<html>
<head>
	<title>Listar Categorías</title>
	<meta charset='utf-8'>
</head>
<body>
	<?PHP 
	if($categorias){
		foreach ($categorias->result() as $categoria){ ?>
		<ul>
			<li><?= $categoria->nombre; ?></li>
		</ul>
	<?PHP }
	}else echo "No existen datos";?>
		
</body>
</html>