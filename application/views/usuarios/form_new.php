<html>
<head>
	<title>Nuevo Usuario</title>
	<meta charset='utf-8'>
</head>
<body>
	<?= form_open("/usuarios_controller/getNewUser")?>
	<?php
		$nif 				= array('name' => 'nif');
		$nombre				= array('name' => 'nombre');
		$apellidos			= array('name' => 'apellidos');
		$email 				= array('name' => 'email');
		$telefono			= array('name' => 'telefono');
		$fecha_nacimiento	= array('name' => 'fecha_nacimiento');
		$password			= array('name' => 'password');
		$localidad 			= array('name' => 'localidad');
	?>
	
	<label>NIF (con letra): <?= form_input($nif) ?></label><br>
	<label>Nombre: <?= form_input($nombre) ?></label><br>
	<label>Apellidos: <?= form_input($apellidos) ?></label><br>
	<label>Teléfono: <?= form_input($telefono) ?></label><br>
	<label>Correo: <?= form_input($email) ?></label><br>
	<label>Fecha de nacimiento (año-mes-dia): <?= form_input($fecha_nacimiento) ?></label><br>
	<label>Comunidad: </label>

	<select name='localidad' id='localidad'>
        <option value='Andalucía'> Andalucía </option>
        <option value='Aragón'> Aragón </option>
        <option value='Asturias'> Principado de Asturias </option>
        <option value='Baleares'> Baleares </option>
        <option value='Canarias'> Canarias </option>
        <option value='Cantabria'> Cantabria </option>
        <option value='Castilla la Mancha'> Castilla La Mancha </option>
        <option value='Castilla y León'> Castilla y León </option>
        <option value='Cataluña'> Cataluña </option>
        <option value='Ceuta'> Ceuta </option>
        <option value='Extremadura'> Extremadura </option>
        <option value='Galicia'> Galicia </option>
        <option value='Rioja'> La Rioja </option>
        <option value='Madrid'> Madrid </option>
        <option value='Melilla'> Melilla </option>
        <option value='Murcia'> Murcia </option>
        <option value='Navarra'> Navarra </option>
        <option value='País_Vasco'> País Vasco </option>
        <option value='C.Valencia'> C.Valencia </option>
	</select><br>

	<label>Contraseña: <?= form_password($password) ?></label><br>

	<?= form_submit('','Añadir usuario') ?>

	<?= form_close()?>
</body>
</html>