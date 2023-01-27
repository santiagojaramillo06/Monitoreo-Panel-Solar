<?php
	/*date_default_timezone_set('America/Bogota');
	$zonahoraria = date_default_timezone_get();
    echo 'Zona horaria predeterminada: ' . $zonahoraria;
	$fecha_actual = date("Y-m-d");
	echo $fecha_actual;*/
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="assets/images/logo-footer.png">
		<title>Monitoreo Panel</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">
		<link href="assets/css/theme.css" rel="stylesheet">
		<!-- Begin tracking codes here, including ShareThis/Analytics -->
    
		<!-- End tracking codes here, including ShareThis/Analytics -->
		<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
		<style>
			html {
				font-family: Arial, Helvetica, sans-serif;
			}
			table {
				border-collapse: separate;
 			 	border-spacing: 0px 0px;
				width: 100%;
  				border-collapse: collapse;
  				border: 3px solid purple;
			}

			th {
				padding-top: 12px;
				padding-bottom: 12px;
				width: 10px;
				background-color: #04AA6D;
				color: white;
			}
			td, th {
				border: 0px solid #ddd;
				padding: 10px;
				text-align: center;
				width: 10px;
			}
			tr:nth-child(even){
				background-color: #f2f2f2;
			}
			tr:hover {
				background-color: #ddd;
			}
			#registros{
				float: left;
			}

			#graficahumedad{
				float: left;
				margin-left: 10px;
			}

			#graficatemperatura{
				float: left;
				margin-left: 10px;
			}

			#graficacorriente{
				float: left;
				margin-left: 10px;
			}

			#graficavoltaje{
				float: right;
				margin-left: 5px;
			}

			#graficapotencia{
				float: left;
				margin-left: 5px;
			}

			.scroll {
				overflow:scroll;
				height:1200px;
				width:300px;
			}

		</style>
	</head>
	<body class="layout-default">
		<!-- Begin Menu Navigation
		================================================== -->
		<header class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsWow" aria-controls="navbarsWow" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
				<div class="container">
					<!-- Begin Logo -->
					<a class="navbar-brand" href="index.html">
					<img src="assets/images/logo.png" width="100" height="100"  alt="Affiliates - Free Bootstrap Template">
					</a>
					<!-- End Logo -->
					<!-- Begin Menu -->
					<div class="collapse navbar-collapse" id="navbarsWow">
						<!-- Begin Menu -->
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
							<a class="nav-link" href="index.html">Inicio</a>
							</li>
							<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cuenta</a>
							<div class="dropdown-menu" aria-labelledby="dropdown01">
								<a class="dropdown-item" href="single.html">Left Sidebar</a>
								<a class="dropdown-item" href="single-sidebar-right.html">Right Sidebar</a>
							</div>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="category.html">Categoría</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="about.html">Info</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="contact.html">Contacto</a>
							</li>
							<li class="nav-item">
							<a target="_blank" class="nav-link highlight" href="https://gum.co/affiliates-html-template">Like</a>
							</li>
						</ul>
						<!-- End Menu -->
					</div>
				</div>
			</header>
			<!-- End Menu Navigation
			================================================== -->
			<div class="site-content">
				<!-- Home Jumbotron
				================================================== -->
				<section class="intro">
				<div class="wrapintro">
					<h1>Monitoreo Panel Solar </h1>
					<h2 class="lead">"Tenemos un práctico reactor de fusión en el cielo llamado sol, no tienes que hacer nada, sólo funciona. Aparece todos los días". - "Elon Musk"</h2>
					<a target="_blank" href="https://gum.co/affiliates-html-template" class="btn">Ver mas</a>
				</div>
				</section>
				<!-- Container
				================================================== -->
				<div class="container">
					<div class="main-content">
						<!-- Featured
						================================================== -->
						<section class="featured-posts">
						<div class="section-title">
							<h2><span>Monitoreo en tiempo real</span></h2>
						</div>
						<div class="row listfeaturedtag">
							<!-- begin post -->
							<div class="col-sm-6">
								<div class="card">
									<div class="row">
										<div class="col-md-5 wrapthumbnail">
											<a href="single.html">
											<div class="thumbnail" style="background-image:url(assets/images/1.jpg);">
											</div>
											</a>
										</div>
										<div class="col-md-7">
											<div class="card-block">
												<h2 class="card-title"><a href="single.html">¿Por que es importante?</a></h2>
												<h4 class="card-text">El sistema de monitoreo permite la medición de energía solar generada por un sistema fotovoltaico, en tiempo real, ademas ayuda a determinar si existe algún problema en la producción de energía solar</h4>
												<div class="metafooter">
													<div class="wrapfooter">
														<span class="meta-footer-thumb">
														<div class="clearfix">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end post -->
							<!-- begin post -->
							<div class="col-sm-6">
								<div class="card">
									<div class="row">
										<div class="col-md-5 wrapthumbnail">
											<a href="single.html">
											<div class="thumbnail" style="background-image:url(assets/images/4.jpg);">
											</div>
											</a>
										</div>
										<div class="col-md-7">
											<div class="card-block">
												<h2 class="card-title"><a href="single.html">Ventaja del monitoreo </a></h2>
												<h4 class="card-text">La gran ventaja del monitoreo general es que es un sistema de bajo costo que permite al usuario detectar producciones  bajas  de  energía  en  la  instalación  fotovoltaica.</h4>
												<div class="metafooter">
													<div class="wrapfooter">
														<div class="clearfix">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end post -->
						</div>
						</section>
						<!-- Posts Index
					================================================== -->
					<section class="recent-posts row">
			<div class="col-sm-4">
				<div class="sidebar">
					<div class="sidebar-section">
						<h5><span>Tabla De Datos</span></h5>
						<div class="table-responsive scroll">
							<table class="table table-bordered">
								<thead class="thead-dark">
									<tr>
										<th>ID</th>
										<th>Voltaje</th>
										<th>Corriente</th>
										<th>Potencia</th>
										<th>Humedad</th>
										<th>Temperatura</th>
										<th>Fecha y Hora</th>
									</tr>
								</thead>
								<tbody id="tdatos">
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="section-title">
					<h2><span>Medicion En Tiempo Real</span></h2>
				</div>
				<div class="masonrygrid row listrecent">
					<!-- begin post -->
					<div class="col-md-6 grid-item">
						<div class="section-title">
							<h2><span>Grafica De Voltaje</span></h2>
						</div>
						<div class="row">
							<div class="img-fluid" id="graficavoltaje">
								<canvas id="graficovol" width="400" height="400"></canvas>
							</div>
						</div>
						<div class="section-title">
							<h2><span>  </span></h2>
						</div>
						<div class="section-title">
							<h2><span>  </span></h2>
						</div>
						<div class="section-title">
							<h2><span>  </span></h2>
						</div>
						<div class="section-title">
							<h2><span>  </span></h2>
						</div>
					</div>
					<!-- end post -->
					<!-- begin post -->
					<div class="col-md-6 grid-item">
						<div class="section-title">
							<h2><span>Grafica De Corriente</span></h2>
						</div>
						<div class="row">
							<div class="img-fluid" id="graficacorriente">
								<canvas id="graficocorri" width="400" height="550"></canvas>
							</div>
						</div>
						<div class="section-title">
							<h2><span>  </span></h2>
						</div>
					</div>
					<!-- end post -->
					<!-- begin post -->
					<div class="col-md-6 grid-item">
						<div class="section-title">
							<h2><span>Grafica De Potencia</span></h2>
						</div>
						<div class="row">
							<div class="img-fluid" id="graficapotencia">
							<canvas id="graficopot" width="400" height="550"></canvas>
							</div>
						</div>
					</div>
					<!-- end post -->
					<!-- begin post -->
					<div class="col-md-6 grid-item">
						<div class="section-title">
							<h2><span>Grafica De Humedad</span></h2>
						</div>
						<div class="row">
							<div class="img-fluid" id="graficahumedad">
								<canvas id="graficohume" width="400" height="550"></canvas>
							</div>
						</div>
					</div>
					<!-- end post -->
				</div>
				<!-- Pagination -->
				<div class="bottompagination">
					<div class="navigation">
                        <nav class="pagination">
                            <span class="page-number"> &nbsp; &nbsp; Pagina 1 de 1 &nbsp; &nbsp; </span>
                        </nav>
					</div>
				</div>
			</div>
			</section>
		</div>
	</div>
	<!-- /.container -->
	<!-- Before Footer
    ================================================== -->
	<div class="beforefooter">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<h3>"La energía solar está destinada a estar en nuestro futuro. Hay una especie de inevitabilidad al respecto".</h3> <h5>- Jim Inhofe</h5>
					<p>
					 Tu puedes <span>hacer un gran cambio</span>, esta es la oportunidad.
					</p>
					<a class="btn btn-primary btn-lg" href="#">Sistemas De Monitoreo</a>
				</div>
				<div class="col-md-4 text-right footersocial">
					<h5>Conéctate con nosotros </h5>
					<i class="fa fa-facebook"></i>
					<i class="fa fa-twitter"></i>
					<i class="fa fa-google"></i>
					<i class="fa fa-pinterest"></i>
					<i class="fa fa-github"></i>
				</div>
			</div>
		</div>
	</div>
	<!-- Begin Footer
    ================================================== -->
	<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="footer-widget">
					<a href="contact.html">
					<img src="assets/images/logo-footer.png" alt="logo footer">
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="footer-widget">
					<h5 class="title">Recursos</h5>
					<ul>
						<li><a target="_blank" href="https://m.do.co/c/84c9b45d0c47">Vistronica</a></li>
						<li><a target="blank" href="https://www.cloudways.com/en/pricing.php?id=153986&amp;a_bid=005da123">Ferrotronica</a></li>
						<li><a target="blank" href="https://shareasale.com/r.cfm?b=875645&amp;u=1087935&amp;m=41388&amp;urllink=&amp;afftrack=">Electronica y sonido mundial</a></li>
						<li><a target="blank" href="https://elementor.com/?ref=1556">Electronica Monteria</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="footer-widget">
					<h5 class="title">Autores</h5>
					<ul>
						<li><a href="https://www.wowthemes.net/premium-themes-templates/">Juan Pablo Argumedo</a></li>
						<li><a target="_blank" href="https://www.wowthemes.net/affiliate-area/">Jimena De La Ossa </a></li>
						<li><a href="https://www.wowthemes.net/terms-and-conditions/">Santiago Jaramillo</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="footer-widget textwidget">
					<h5 class="title">UPB</h5>
					<p>
						 Esta pagina fue realizada por estudiantes de ingenieria electronica sexto semestre para mayor informacion presionar.  <a href="https://www.upb.edu.co/es/pregrados/ingenieria-electronica-monteria">Ver mas</a>.
					</p>
					<a href="https://www.upb.edu.co/es/home" target="_blank">Universidad Pontificia Bolivariana</a>
				</div>
			</div>
		</div>
		<div class="copyright">
			<p class="pull-left">
				 Copyright © 2022 Grupo Scorpion
			</p>
			<p class="pull-right">
				<!-- Leave credit to author unless you own a commercial license: https://www.wowthemes.net/freebies-license/ -->
				<a target="_blank" href="https://www.wowthemes.net/affiliates-free-bootstrap-template/">"Grupo Scorpion"</a> - Design & Code by Teams Scorpion
			</p>
			<div class="clearfix">
			</div>
		</div>
	</div>
	</footer>
	<!-- End Footer
    ================================================== -->
</div>


<!-- JavaScript
================================================== -->
<script src="assets/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="assets/js/masonry.pkgd.min.js"></script>
<script src="assets/js/theme.js"></script>
	</body>
	<script>

		function mostrarRegistrosTabla() {
			$.ajax({
				type: "GET",
				url:  'consultatablatest.php',
				success: function (data) {
					var rows = "";
					var datatest = eval(data);
					console.log(datatest);
					$.each(datatest, function(key, value) {
						rows = rows + '<tr>';
						rows = rows + '<td>' + value.id + '</td>';
						rows = rows + '<td>' + value.voltaje + '</td>';
						rows = rows + '<td>' + value.corriente + '</td>';
						rows = rows + '<td>' + value.potencia + '</td>';
						rows = rows + '<td>' + value.humedad + '</td>';
						rows = rows + '<td>' + value.temperatura + '</td>';															
						rows = rows + '<td>' + value.fecha_actual + '</td>';
						rows = rows + '</tr>';
					});
					$("#tdatos").html(rows);
				}
			});
		}
/*
		<div class="row">

			<div class="col-4" id="graficatemperatura">
				<canvas id="graficotemp" width="300" height="450"></canvas>
			</div>

		</div>

		function muestraResultadoGrafica1() {
			$.ajax({
				type: "GET",
				url:  'consultatemperatura.php',
				success: function (data) {
					var resultado = eval(data);
					console.log(resultado);
					$('#graficotemp').remove(); // this is my <canvas> element
					$('#graficatemperatura').append('<canvas id="graficotemp" width="400" height="550"><canvas>');
					var array_temperatura = [];
					var array_fecha = [];
					var i=0;
					$.each(resultado, function (key, val) {
						array_temperatura[i] = val.temperatura;
						array_fecha[i] = val.fecha_actual
						i++;
					})
					console.log(array_temperatura);
					console.log(array_fecha);
					var ctx = document.getElementById('graficotemp');
					var myChart = new Chart(ctx, {
						type: 'bar',
						data: {
							labels: array_fecha,
							datasets: [{
								label: 'Temperatura',
								data: array_temperatura,
								backgroundColor: [
									'rgba(255, 99, 132, 0.2)',
									'rgba(54, 162, 235, 0.2)',
									'rgba(255, 206, 86, 0.2)',
									'rgba(75, 192, 192, 0.2)',
									'rgba(153, 102, 255, 0.2)',
									'rgba(255, 159, 64, 0.2)'
								],
								borderColor: [
									'rgba(255, 99, 132, 1)',
									'rgba(54, 162, 235, 1)',
									'rgba(255, 206, 86, 1)',
									'rgba(75, 192, 192, 1)',
									'rgba(153, 102, 255, 1)',
									'rgba(255, 159, 64, 1)'
								],
								borderWidth: 1
							}]
						},
						options: {
							scales: {
								y: {
									beginAtZero: true
								}
							}
						}
					});
				}
			});
		}
*/
		function muestraResultadoGrafica2() {
			$.ajax({
				type: "GET",
				url:  'consultahumedad.php',
				success: function (data) {
					var resultado2 = eval(data);
					console.log(resultado2);
					$('#graficohume').remove(); // this is my <canvas> element
					$('#graficahumedad').append('<canvas id="graficohume" width="400" height="550"><canvas>');
					var array_humedad = [];
					var array_hora = [];
					var y=0;
					$.each(resultado2, function (key, val) {
						array_humedad[y] = val.humedad;
						array_hora[y] = val.fecha_actual;
						y++;
					})
					console.log(array_humedad);
					console.log(array_hora);
					var ctx = document.getElementById('graficohume');
					var myChart = new Chart(ctx, {
						type: 'line',
						data: {
							labels: array_hora,
							datasets: [{
								label: 'Humedad',
								data: array_humedad,
								fill: false,
								borderColor: 'rgb(75, 192, 192)',
								tension: 0.1
							}]
						},
						options: {
							scales: {
								y: {
									beginAtZero: true
								}
							}
						}
					});
				}
			});
		}

		function muestraResultadoGrafica3() {
			$.ajax({
				type: "GET",
				url:  'consultavoltaje.php',
				success: function (data) {
					var resultado3 = eval(data);
					console.log(resultado3);
					$('#graficovol').remove(); // this is my <canvas> element
					$('#graficavoltaje').append('<canvas id="graficovol" width="400" height="550"><canvas>');
					var array_voltaje = [];
					var array_hora = [];
					var y=0;
					$.each(resultado3, function (key, val) {
						array_voltaje[y] = val.voltaje;
						array_hora[y] = val.fecha_actual;
						y++;
					})
					console.log(array_voltaje);
					console.log(array_hora);
					var ctx = document.getElementById('graficovol');
					var myChart = new Chart(ctx, {
						type: 'line',
						data: {
							labels: array_hora,
							datasets: [{
								label: 'Voltaje',
								data: array_voltaje,
								fill: false,
								borderColor: 'rgb(75, 192, 192)',
								tension: 0.1
							}]
						},
						options: {
							scales: {
								y: {
									beginAtZero: true
								}
							}
						}
					});
				}
			});
		}

		function muestraResultadoGrafica4() {
			$.ajax({
				type: "GET",
				url:  'consultacorriente.php',
				success: function (data) {
					var resultado4 = eval(data);
					console.log(resultado4);
					$('#graficocorri').remove(); // this is my <canvas> element
					$('#graficacorriente').append('<canvas id="graficocorri" width="400" height="550"><canvas>');
					var array_corriente = [];
					var array_hora = [];
					var y=0;
					$.each(resultado4, function (key, val) {
						array_corriente[y] = val.corriente;
						array_hora[y] = val.fecha_actual;
						y++;
					})
					console.log(array_corriente);
					console.log(array_hora);
					var ctx = document.getElementById('graficocorri');
					var myChart = new Chart(ctx, {
						type: 'line',
						data: {
							labels: array_hora,
							datasets: [{
								label: 'Corriente',
								data: array_corriente,
								fill: false,
								borderColor: 'rgb(75, 192, 192)',
								tension: 0.1
							}]
						},
						options: {
							scales: {
								y: {
									beginAtZero: true
								}
							}
						}
					});
				}
			});
		}

		function muestraResultadoGrafica5() {
			$.ajax({
				type: "GET",
				url:  'consultapotencia.php',
				success: function (data) {
					var resultado5 = eval(data);
					console.log(resultado5);
					$('#graficopot').remove(); // this is my <canvas> element
					$('#graficapotencia').append('<canvas id="graficopot" width="400" height="550"><canvas>');
					var array_potencia = [];
					var array_hora = [];
					var y=0;
					$.each(resultado5, function (key, val) {
						array_potencia[y] = val.potencia;
						array_hora[y] = val.fecha_actual;
						y++;
					})
					console.log(array_potencia);
					console.log(array_hora);
					var ctx = document.getElementById('graficopot');
					var myChart = new Chart(ctx, {
						type: 'line',
						data: {
							labels: array_hora,
							datasets: [{
								label: 'Potencia',
								data: array_potencia,
								fill: false,
								borderColor: 'rgb(75, 192, 192)',
								tension: 0.1
							}]
						},
						options: {
							scales: {
								y: {
									beginAtZero: true
								}
							}
						}
					});
				}
			});
		}
		
		mostrarRegistrosTabla();

//		muestraResultadoGrafica1();

		muestraResultadoGrafica2();

		muestraResultadoGrafica3();

		muestraResultadoGrafica4();

		muestraResultadoGrafica5();

		setInterval('mostrarRegistrosTabla()', 6000);

//		setInterval('muestraResultadoGrafica1()', 6000);

		setInterval('muestraResultadoGrafica2()', 6000);

		setInterval('muestraResultadoGrafica3()', 6000);

		setInterval('muestraResultadoGrafica4()', 6000);

		setInterval('muestraResultadoGrafica5()', 6000);
	</script>
</html>
