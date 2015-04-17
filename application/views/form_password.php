<html>
<head>
	<title>Login</title>
	<meta charset='utf-8'>
</head>
<body>
	<?= form_open("/login_controller/getPassword")?>
	<?php
		$email 		= array('name' => 'email');
	?>
	<label>Correo: <?= form_input($email) ?></label>

	<?= form_submit('','Enviar') ?>

	<?= form_close()?>
</body>
</html>