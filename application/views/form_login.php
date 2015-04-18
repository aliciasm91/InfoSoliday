<!DOCTYPE html>	
<html>
<head>
	<title>Login</title>
	<meta charset='utf-8'>
</head>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="styles/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="styles/css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="styles/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style type="text/css">

        td { padding: 5%; }
        table{margin-top: 5%;}
        fieldset {background-color: grey;}

</style>

</head>
<body>
	<?= form_open("/login_controller/login")?>
	<?php
		$nif 		= array('name' => 'nif');
		$password	= array('name' => 'password');
	?>
<center>
	<fieldset>
	<table >
		<tr>
			<td>
				<label>NIF: </label>
			</td>
			<td>
				<?= form_input($nif) ?>
			</td>
		</tr>

		<tr>
			<td>
				<label>Contraseña: </label>
			</td>
			<td>
				<?= form_password($password) ?>
			</td>
		</tr>
	</table>
		<p1 style=color:red;><?php if(isset($error)) echo $error; ?></p1>

		<a href="./password">¿Olvidaste tu contraseña?</a><br>

		<a href="../usuarios_controller/newUser">Inscríbete</a><br>
		<?= form_submit('','Entrar') ?>
	</fieldset>
</center>
	

	<?= form_close()?>

	<!-- jQuery -->
    <script src="styles/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="styles/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="styles/js/classie.js"></script>
    <script src="styles/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="styles/js/jqBootstrapValidation.js"></script>
    <script src="styles/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="styles/js/agency.js"></script>
</body>
</html>