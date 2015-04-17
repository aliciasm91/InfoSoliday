<html>
<head>
	<title>Modificar Usuario</title>
	<meta charset='utf-8'>
</head>
<body>
	<?= form_open("/usuarios_controller/getUpdateUser/".$id)?>
	<?php

		$nif 				= array('name' => 'nif', 'value' 		=> $usuario->result()[0]->nif);
		$nombre				= array('name' => 'nombre', 'value' 	=> $usuario->result()[0]->nombre);
		$apellidos			= array('name' => 'apellidos', 'value'	=> $usuario->result()[0]->apellidos);
		$email 				= array('name' => 'email', 'value' 		=> $usuario->result()[0]->email);
		$telefono			= array('name' => 'telefono', 'value' 	=> $usuario->result()[0]->telefono);
		$fecha_nacimiento	= array('name' => 'fecha_nacimiento', 'value' => $usuario->result()[0]->fecha_nacimiento);
		$password			= array('name' => 'password', 'value' 	=> $usuario->result()[0]->password);
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

        <option <?PHP if($usuario->result()[0]->localidad == 'Andalucía'){?> selected="selected"<?php } ?> value='Andalucía'> Andalucía </option>
        <option <?PHP if($usuario->result()[0]->localidad == 'Aragón'){?> selected="selected"<?php } ?> value='Aragón'> Aragón </option>
        <option <?PHP if($usuario->result()[0]->localidad == 'Asturias'){?> selected="selected"<?php } ?>value='Asturias'> Principado de Asturias </option>
        <option <?PHP if($usuario->result()[0]->localidad == 'Asturias'){?> selected="selected"<?php } ?>value='Asturias'> Baleares </option>
        <option <?PHP if($usuario->result()[0]->localidad == 'Asturias'){?> selected="selected"<?php } ?>value='Asturias'> Canarias </option>
        <option <?PHP if($usuario->result()[0]->localidad == 'Cantabria'){?> selected="selected"<?php } ?>value='Cantabria'> Cantabria </option>
        <option <?PHP if($usuario->result()[0]->localidad == 'Castilla la Mancha'){?> selected="selected"<?php } ?>value='Castilla la Mancha'> Castilla La Mancha </option>
        <option <?PHP if($usuario->result()[0]->localidad == 'Castilla y León'){?> selected="selected"<?php } ?>value='Castilla y León'> Castilla y León </option>
        <option <?PHP if($usuario->result()[0]->localidad == 'Cataluña'){?> selected="selected"<?php } ?>value='Cataluña'> Cataluña </option>
        <option <?PHP if($usuario->result()[0]->localidad == 'Ceuta'){?> selected="selected"<?php } ?>value='Ceuta'> Ceuta </option>
        <option <?PHP if($usuario->result()[0]->localidad == 'Extremadura'){?> selected="selected"<?php } ?>value='Extremadura'> Extremadura </option>
        <option <?PHP if($usuario->result()[0]->localidad == 'Galicia'){?> selected="selected"<?php } ?>value='Galicia'> Galicia </option>
        <option <?PHP if($usuario->result()[0]->localidad == 'Rioja'){?> selected="selected"<?php } ?>value='Rioja'> La Rioja </option>
        <option <?PHP if($usuario->result()[0]->localidad == 'Madrid'){?> selected="selected"<?php } ?>value='Madrid'> Madrid </option>
        <option <?PHP if($usuario->result()[0]->localidad == 'Melilla'){?> selected="selected"<?php } ?>value='Melilla'> Melilla </option>
        <option <?PHP if($usuario->result()[0]->localidad == 'Murcia'){?> selected="selected"<?php } ?>value='Murcia'> Murcia </option>
        <option <?PHP if($usuario->result()[0]->localidad == 'Navarra'){?> selected="selected"<?php } ?>value='Navarra'> Navarra </option>
        <option <?PHP if($usuario->result()[0]->localidad == 'País_Vasco'){?> selected="selected"<?php } ?>value='País_Vasco'> País Vasco </option>
        <option <?PHP if($usuario->result()[0]->localidad == 'C.Valencia'){?> selected="selected"<?php } ?>value='C.Valencia'> C.Valencia </option>
        
	</select><br>

	<label>Contraseña: <?= form_password($password) ?></label><br>

	<?= form_submit('','Actualizar usuario') ?>

	<?= form_close()?>
</body>
</html>