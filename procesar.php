<!DOCTYPE HTML>
<!--
	Linear by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>contacto</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
	</head>
	<body>

	<!-- Header -->
		<div id="header">
			<div id="nav-wrapper"> 
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="index.html">Inicio</a></li>
						<li><a href="miperfil.html">Mi perfil</a></li>
						<li class="active"><a href="Contacto.html">Contacto</a></li>
					</ul>
				</nav>
			</div>
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">Contacto</a></h1>
					<span class="tag">ADSI 1354951</span>
				</div>
			</div>
		</div>
	<!-- Header --> 

	<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row">

					<!-- Content -->
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<h2>DATOS</h2>
								<span class="byline">Estos son tus datos y gracias por comentar</span>
							</header>
							<?php 
function validarText($variable){
	if (ctype_alpha($variable) && !empty($variable)) {
		echo $variable;
	}elseif(!empty($variable)  && !ctype_alpha($variable)){
		echo "NO VALIDO";
}
}
function validadNumeros($variable){
	if (is_numeric($variable ) && !empty($variable)) {
		if ($variable >0) {
			echo $variable;
		}elseif (empty($variable)) {
			echo "NO VALIDO";
		}
	}
}

function validaEmail($variable){
	if (isset($variable)&& !empty($variable) && filter_var($variable, FILTER_VALIDATE_EMAIL)) {
		echo "CORREO: $variable";
	} else {
		echo "CORREO NO VALIDO";
	}
}

function validaTextarea($variable){
	if (isset($variable) && !empty($variable)) {
		echo "COMENTARIO: $variable";
	} elseif (empty($variable)) {
		echo "NO PUEDE ESTAR VACIO";
	}
}

/* VALIDAR NOMBRE Y APELLIDO */
if (isset($_GET['name'])) {echo "NOMBRE: "; echo validarText($_GET['name']);echo "<br>";};
if (isset($_GET['ape'])) {echo "APELLIDO: "; echo validarText($_GET['ape']);echo "<br>";};

/* VALIDAR TELEFONO*/

if (isset($_GET['num'])) {echo "TELEFONO: "; echo validadNumeros($_GET['num']);echo "<br>";};

/*validar email*/

if (isset($_GET['Correo'])) {echo validaEmail($_GET['Correo']);echo "<br>";}

/*validar textarea*/
if (isset($_GET['textarea'])) {echo validaTextarea($_GET['textarea']);echo "<br>";}
/*<input type="button" value="Ver Hoja de vida" onClick="javascript:history.go(-1)" />*/
 ?>

 
							
						</section>
					</div>

					<!-- Sidebar -->
					<div id="sidebar" class="4u">
						<section>
							<header>
								<h2>Noticias</h2>
							</header>
							<div class="row">
								<section class="6u">
									<ul class="default">
										<li><a href="http://www.eltiempo.com/buscar?q=novedades-tecnologicas">Ultimas noticias tecnologicas</a></li>
										<li><a href="http://www.lanacion.com.ar/novedades-tecnologicas-t50788">Novedades</a></li>
									</ul>
								</section>
								<section class="6u">
									<ul class="default">
										<li><a href="http://www.eafit.edu.co/estudiantes/noticias/actualidad/Paginas/Actualidad-Ingles-un-idioma-que-abre-las-puertas-del-mundo.aspx">Un idioma que abre puertas</a></li>
										<li><a href="http://www.eitb.eus/es/noticias/internacional/">Actualidad</a></li>
									</ul>
								</section>
							</div>
						</section>
						<section>
							<ul class="style">
								<li>
									<p><a href="http://valentinacundumivilladelsur.blogspot.com.co/">Este blog lo realice en grado once, donde cuento un poco mas sobre mi y de cuales eran mis sueños en ese tiempo.</a></p>
								</li>
								<hr>
							</ul>
						</section>
					</div>
					
				</div>
			</div>
		</div>
	<!-- /Main -->

	<!-- Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo;La inspiracion existe, pero tiene que encontrarte
					trabajando      -Pablo Picasso.&rdquo;</blockquote>
				</section>
			</div>
		</div>
	<!-- /Tweet -->

	<!-- Footer -->
		<div id="footer">
			<div class="container">
				<section>
					<header>
						<h2>Redes Sociales</h2>
					</header>
					<ul class="contact">
						<li class="active"><a href="https://www.facebook.com/valentina.cundumi11" class="fa fa-facebook"><span>Facebook</span></a></li>
						<li><a href="#" class="fa fa-dribbble"><span>Pinterest</span></a></li>
						<li><a href="#" class="fa fa-tumblr"><span>Google+</span></a></li>
					</ul>
				</section>
			</div>
		</div>
	<!-- /Footer -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
			</div>
		</div>


	</body>
</html>
