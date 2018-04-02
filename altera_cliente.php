<?php

/*
PROPRIEDADE ÉPOCA TECNOLOGIA

AUTOR E DESENVOLVEDOR: DHOUGLAS SILVA GOMES

SISTEMA: ERP SyspoQ

VERSÃO: 0.1
*/

	session_start();

	if(!isset($_SESSION['id_usuario'])){
			header('Location: index.php?erro=1');
	}
	
	include "assets/scripts/php/localiza_cliente.php";

?>
<!DOCTYPE html>
<html>


<head>
	<title>Dashboard | SyspoQ</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">	
	<link rel="stylesheet" href="assets/css/cadastro_cliente.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

	<script
		src="https://code.jquery.com/jquery-3.3.1.min.js"
		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
		crossorigin="anonymous">
	</script>

	<script type='text/javascript' src='assets/scripts/js/carrega_cep.js'></script>
	<script type='text/javascript' src='assets/scripts/js/edita_cliente.js'></script>
	<script type="text/javascript" src="assets/scripts/js/mask_cnpj.js"></script>
</head>
<body>
<div id="wrapper">
	<?php	
	include "menu_padrao.php";	
	?>
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading" id="head-cadastro-clientes">
							<h3 class="panel-title">Cadastro de Clientes</h3>
							<?php echo $erro;?>							
						</div>
						<hr />
						<div id="main" class="container-fluid"> 				  
						  
						<form method="post" id="form_cliente" name="form_cliente" >
						  	<div class="row" id="resultado_salvar_cliente">
							  	  <div class="form-group col-md-1">
							  	  	<label for="id_post">Código</label>
							  	  	<input class="form-control" id="id_post" name="id_post" readonly="true" value="<?php echo $id_cliente;?>">
							  	  </div>
								  <div class="form-group col-md-3" id="teste">
							  	  	<label for="cnpj_cliente">CNPJ *</label>
							  	  	<input class="form-control" id="cnpj_cliente" name="cnpj_cliente" autofocus="true" placeholder="00.000.000/0000-00" required="true" onkeypress='mascaraMutuario(this,cpfCnpj); limitar()'; value="<?php echo $dados_cliente['cnpj'];?>">
							  	  </div>
								  <div class="form-group col-md-8">
							  	  	<label for="nome_razao_cliente">Razão Social</label>
							  	  	<input class="form-control" id="nome_razao_cliente" name="nome_razao_cliente" value="<?php echo $dados_cliente['razao_social'];?>">
							  	  </div>
							</div>
							
							<div class="row">
							  	  <div class="form-group col-md-4">
							  	  	<label for="inscricao_cliente">Inscrição  Estadual</label>
							  	  	<input class="form-control" id="inscricao_cliente" name="inscricao_cliente" value="<?php echo $dados_cliente['inscricao_estadual'];?>" >
							  	  </div>					  
								  <div class="form-group col-md-5">
							  	  	<label for="identificacao_icms">Identificação Inscrição Estadual *</label>
							  	  	<select class="form-control" id="identificacao_icms" name="identificacao_icms" >
							  	  		<option <?php echo $check0;?>></option>
							  	  		<option <?php echo $check1;?>>Contribuinte(Possui Insc. Estadual)</option>
							  	  		<option <?php echo $check2;?>>Não Contribuinte(Não tem Insc. Estadual)</option>
							  	  		<option <?php echo $check3;?>>ISENTO</option>

							  	  	</select>
							  	  </div>
								  <div class="form-group col-md-3">
							  	  	<label for="cep">Cep</label>
							  	  	<input class="form-control" id="cep" name="cep" placeholder="79.000-000" onkeypress='mascaraMutuario(this,cep); limitar_cep()'; value="<?php echo $dados_cliente['cep'];?>">
							  	  </div>
							</div>
							
							<div class="row">
						  	  <div class="form-group col-md-6">
						  	  	<label for="rua_cliente">Rua</label>
						  	  	<input class="form-control" id="rua_cliente" name="rua_cliente" value="<?php echo $dados_cliente['rua'];?>">
						  	  </div>
							  <div class="form-group col-md-1">
						  	  	<label for="numero_endereco_cliente">Nº</label>
						  	  	<input class="form-control" id="numero_endereco_cliente" name="numero_endereco_cliente" value="<?php echo $dados_cliente['numero_endereco'];?>">
						  	  </div>
						  	  <div class="form-group col-md-5">
						  	  	<label for="complemento_endereco_cliente">Complemento</label>
						  	  	<input class="form-control" id="complemento_endereco_cliente" name="complemento_endereco_cliente" placeholder="Ex: Bloco, Apto, Referência..." value="<?php echo $dados_cliente['complemento'];?>">
						  	  </div>
							</div>
							
							<div class="row">
						  	  <div class="form-group col-md-4">
						  	  	<label for="bairro_cliente">Bairro</label>
						  	  	<input class="form-control" id="bairro_cliente" name="bairro_cliente" value="<?php echo $dados_cliente['bairro'];?>" >
						  	  </div>
							  <div class="form-group col-md-2">
						  	  	<label for="uf_cliente">UF</label>
						  	  	<input class="form-control" id="uf_cliente" name="uf_cliente" value="<?php echo $dados_cliente['uf'];?>">
						  	  </div>
							  <div class="form-group col-md-3">
						  	  	<label for="cidade_cliente">Cidade</label>
						  	  	<input class="form-control" id="cidade_cliente" name="cidade_cliente" value="<?php echo $dados_cliente['cidade'];?>">
						  	  </div>
							  <div class="form-group col-md-3">
						  	  	<label for="pais_cliente">País</label>
						  	  	<input class="form-control" id="pais_cliente" name="pais_cliente" value="Brasil" value="<?php echo $dados_cliente['pais'];?>">
						  	  </div>
							</div>
							
							<div class="row">
								<div class="form-group col-md-4">
									<label for="email_cliente">Email</label>
									<input type="email" class="form-control" id="email_cliente" name="email_cliente" value="<?php echo $dados_cliente['email'];?>">
								</div>
								<div class="form-group col-md-3">
									<label for="telefone_cliente">Telefone</label>
									<input class="form-control" id="telefone_cliente" name="telefone_cliente" value="<?php echo $dados_cliente['telefone'];?>">
								</div>
								<div class="form-group col-md-5">
									<label for="observacao_cliente">Observações</label>
									<input class="form-control" id="observacao_cliente" name="observacao_cliente" value="<?php echo $dados_cliente['observacoes'];?>">
								</div>
								<div class="form-group col-md-5">Incluído em: <?php echo $dados_cliente['data_insert']; ?></div>	

							</div>
							
							<hr />
							
							<div class="row">
							  <div class="col-md-12" id="btn-cadastro-cliente">
							  	<button type="button" id="btn_salva_cliente" class="btn btn-primary">Salvar</button>
								<a href="home.php" class="btn btn-default">Voltar</a>
								<!--<button type="button" id="btn_consulta_cnpj" class="btn btn-primary">Consulta CNPJ</button>-->
							  </div>
							</div>

						</form>  
				 </div>
                </div>
            </div>
					<!--  END OVERVIEW -->
					
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2018 <a href="http://www.epocasistemas.com.br" target="_blank">SyspoQ</a>. Todos direitos Reservados.</p>
			</div>
		</footer>
	</div>
</div>
</div>

	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
	<script>
	$(function() {
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

		new Chartist.Bar('#visits-chart', data, options);


		// real-time pie chart
		var sysLoad = $('#system-load').easyPieChart({
			size: 130,
			barColor: function(percent) {
				return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
			},
			trackColor: 'rgba(245, 245, 245, 0.8)',
			scaleColor: false,
			lineWidth: 5,
			lineCap: "square",
			animate: 800
		});

		var updateInterval = 3000; // in milliseconds

		setInterval(function() {
			var randomVal;
			randomVal = getRandomInt(0, 100);

			sysLoad.data('easyPieChart').update(randomVal);
			sysLoad.find('.percent').text(randomVal);
		}, updateInterval);

		function getRandomInt(min, max) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}

	});
	</script>

</div>
</body>
</html>