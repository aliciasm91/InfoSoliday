<!doctype html> 
<html>
<head>
	<title>Listar usuarios</title>
	<meta charset='utf-8'>
</head>
<body>
	<?PHP 
	if($usuarios){
		foreach ($usuarios->result() as $usuario){ ?>
		<ul>
			<li>
				<?= $usuario->nif; ?> 
				<?= $usuario->nombre; ?> 
				<?= $usuario->apellidos; ?>
				<?= $usuario->email; ?>
				<?= $usuario->telefono; ?>
				<?= $usuario->fecha_nacimiento; ?>
				<?= $usuario->localidad; ?>
		</li>
		</ul>
	<?PHP }
	}else echo "No existen datos"?>
		
</body>
</html>