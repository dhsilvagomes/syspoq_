<!--
PROPRIEDADE ÉPOCA TECNOLOGIA

AUTOR E DESENVOLVEDOR: DHOUGLAS SILVA GOMES

SISTEMA: ERP SyspoQ

VERSÃO: 0.1
-->
<?php

	session_start();

	if(!isset($_SESSION['id_usuario'])){
			header('Location: index.php?erro=1');
	}

?>

	<!doctype html>
	<html lang="pt-br">

	<head>
		<title>Dashboard | SyspoQ</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<!-- VENDOR CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
		integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
		<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
		
		<!-- MAIN CSS -->
		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/home.css">
		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
		
		<!-- INCLUSÃO JQUERY -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
		 crossorigin="anonymous">
		</script>
		<!--<script type='text/javascript' src='assets/scripts/js/edita_cliente.js'></script>		-->
	</head>

	<body>
		<!-- WRAPPER CSS PARA TELA CHEIA E PARA ADMINISTRAR TUDO DENTRO DA PÁGINA-->
		<div id="wrapper">
			<?php
				include "menu_padrao.php";
			?>
				<!-- MAIN -->
				<div class="main">
					<!-- MAIN CONTENT -->
					<div class="main-content">
						<div class="container-fluid">
							<!-- OVERVIEW -->
							<div class="panel panel-headline" id="unico">
								<div class="panel-heading">
									<h3 class="text-center">Cadastro de Clientes</h3>									
								</div>
								<div id="btn-novo-cliente">
									<a href="cadastro_cliente.php"><button type="button" class="btn btn-info">Novo Cliente</button></a>
								</div>	
								<div>
									<?php
										include ('assets/scripts/php/consulta_clientes_tabela.php');
									?>
								</div>
									
									<!-- END MAIN CONTENT -->

									<!-- END MAIN -->
							</div>

							


							<div class="clearfix"></div>

						</div>

					</div>
					<footer>
						<div class="container-fluid">
							<p class="copyright">&copy; 2018
								<a href="http://www.epocasistemas.com.br" target="_blank">SyspoQ</a>. Todos direitos Reservados.</p>
						</div>
					</footer>
					<!-- END WRAPPER -->
					<!-- Javascript -->
					<script src="assets/vendor/jquery/jquery.min.js"></script>
					<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
					<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
					<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
					<script src="assets/vendor/chartist/js/chartist.min.js"></script>
					<script src="assets/scripts/klorofil-common.js"></script>
					<script>
						$(function () {
							var data, options;

							// headline charts
							data = {
								labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
								series: [
									[23, 29, 24, 40, 25, 24, 35],
									[14, 25, 18, 34, 29, 38, 44],
								]
							};

							options = {
								height: 300,
								showArea: true,
								showLine: false,
								showPoint: false,
								fullWidth: true,
								axisX: {
									showGrid: false
								},
								lineSmooth: false,
							};

							new Chartist.Line('#headline-chart', data, options);


							// visits trend charts
							data = {
								labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
								series: [{
									name: 'series-real',
									data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
								}, {
									name: 'series-projection',
									data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
								}]
							};

							options = {
								fullWidth: true,
								lineSmooth: false,
								height: "270px",
								low: 0,
								high: 'auto',
								series: {
									'series-projection': {
										showArea: true,
										showPoint: false,
										showLine: false
									},
								},
								axisX: {
									showGrid: false,

								},
								axisY: {
									showGrid: false,
									onlyInteger: true,
									offset: 0,
								},
								chartPadding: {
									left: 20,
									right: 20
								}
							};

							new Chartist.Line('#visits-trends-chart', data, options);


							// visits chart
							data = {
								labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
								series: [
									[6384, 6342, 5437, 2764, 3958, 5068, 7654]
								]
							};

							options = {
								height: 300,
								axisX: {
									showGrid: false
								},
							};

							/*new Chartist.Bar('#visits-chart', data, options);


							 real-time pie chart
							var sysLoad = $('#system-load').easyPieChart({
								size: 130,
								barColor: function (percent) {
									return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
								},
								trackColor: 'rgba(245, 245, 245, 0.8)',
								scaleColor: false,
								lineWidth: 5,
								lineCap: "square",
								animate: 800
							});

							var updateInterval = 3000; // in milliseconds

							setInterval(function () {
								var randomVal;
								randomVal = getRandomInt(0, 100);

								sysLoad.data('easyPieChart').update(randomVal);
								sysLoad.find('.percent').text(randomVal);
							}, updateInterval);

							function getRandomInt(min, max) {
								return Math.floor(Math.random() * (max - min + 1)) + min;
							}*/

						});
					</script>
	</body>

	</html>