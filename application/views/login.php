<!DOCTYPE HTML>
<html>
	<head>
		<title>Mnemosine Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/login.css" />
	</head>
	<body class="is-preload">

    <div class="">

    </div>

		<!-- Header -->
			<header id="header">
        <div class="">
  				<h1>Bienvenido a Mnemosine</h1>
        </div>
			</header>

		<!-- Signup Form -->
			<form id="signup-form" action="<?php echo base_url(); ?>bienvenido" method="post">
				<input type="text" name="" id="usuario" placeholder="Usuario" />
        <input type="password" name="" id="contraseña" placeholder="Contraseña" />
				<input type="submit" value="Iniciar Sesión" />
			</form>

		<!-- Footer -->
			<footer id="footer">
				<ul class="copyright">
					<li>Copyright &copy; 2018. All rights reserved. </li><li>Credits: <a href=""></a></li>
				</ul>
			</footer>

		<!-- Scripts -->
			<script src="<?php echo base_url() ?>assets/js/login.js"></script>

	</body>
</html>
