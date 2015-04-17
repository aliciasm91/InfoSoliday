<!doctype html> 
<html>
<head>
	<title>Listar noticias</title>
	<meta charset='utf-8'>
</head>
<body>
	<?PHP 
	if($noticias){
		foreach ($noticias->result() as $noticia){ ?>
		<ul>
			<li>
				<?= $noticia->titulo; ?> 
				<?= $noticia->texto; ?> 
				<img src="C:\xampp\htdocs\InfoSolidary\ImagenesNoticas\carreraSolidaria.jpg" alt="Imagen_carrera"> 
		</li>
		</ul>
		<img src="C:/xampp/htdocs/InfoSolidary/ImagenesNoticas/carreraSolidaria.jpg" alt="Imagen_carrera"> 
	<?PHP }
	}else echo "No existen datos"?>
		
</body>
</html>