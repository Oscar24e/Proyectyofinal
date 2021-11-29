
<!DOCTYPE HTML>
<html>
	<head>
		<title>Tareas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<body class="is-preload landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.html">Bienvenido</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="loginvista.html" class="button primary">Ingresar</a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>Sistema de asignacion de tareas</h2>
							<p>Esta es la pagina<br />
							para que subas tus asignaciones.</p>
						</header>
						<span class="image"><img src="images/inicio (2).jpeg" alt="10px" /></span>
					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

			<!-- One -->
				<section id="one" class="spotlight style1 bottom">
					<span class="image fit main"><img src="images/imagin.jpeg" alt="" /></span>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="col-4 col-12-medium">
									<header >
										<h2>Asignado</h2>
										<button class="button primary" id="ent">Entregar</button>
										<!-- <p><a  class="button primary" id= "ent" ></a></p> -->
									</header>
								</div>
								<div class="col-4 col-12-medium">
									<p>Nombre de la asignacion</p>
									<?php
									$nombre= $_POST['tareaa_nom'];
									echo $nombre
									?>
								</div>
								<div class="col-4 col-12-medium" >
									<p>Subir archivo</p>
									<p ><input type="file" ></p>
								</div>
							</div>
						</div>
					</div>
					
				</section>				

			<!-- Footer -->
				<footer id="footer">
					<p>Proyecto de asignacion y entrega de tareas</p>
				</footer>

		</div>



		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
	<script>
		$("#ent").click(function(){
			Swal.fire(
           '¡Buen trabajo!',
           'Tu tarea fue entregada!',
           'success'
         )
		});

	</script>
</html>