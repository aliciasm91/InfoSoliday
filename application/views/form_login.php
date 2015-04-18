<html>
<head>
	<title>Login</title>
	<meta charset='utf-8'>
</head>
<body>
	<?= form_open("/login_controller/login")?>
	<?php
		$nif 		= array('name' => 'nif');
		$password	= array('name' => 'password');
	?>
	<label>NIF: <?= form_input($nif) ?></label>
	<label>Contraseña: <?= form_password($password) ?></label>
	<p1 style=color:red;><?php if(isset($error)) echo $error; ?></p1>

	<a href="./login_controller/password">¿Olvidaste tu contraseña?</a>

	<?= form_submit('','Entrar') ?>

	<a href="./usuarios_controller/newUser">Inscríbete</a>

	<?= form_close()?>
</body>
</html>