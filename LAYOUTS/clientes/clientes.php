<!--
PROPRIEDADE ÉPOCA TECNOLOGIA

AUTOR E DESENVOLVEDOR: DHOUGLAS SILVA GOMES

SISTEMA: ERP SyspoQ

VERSÃO: 0.1
-->
<?php

	session_start();

	if(!isset($_SESSION['id_usuario'])){
			header('Location: ../../index.php?erro=1');
	}

	//Configurações essenciais
	require_once dirname(__FILE__)."/../../scripts/php/config/config.php";
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
		<link rel="stylesheet" href="../../assets/vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../../assets/vendor/linearicons/style.css">
		<link rel="stylesheet" href="../../assets/vendor/chartist/css/chartist-custom.css">
		<link rel="icon" type="image/png" sizes="96x96" href="../../assets/img/favicon_syspoq.png">

		<!-- MAIN CSS -->
		<link rel="stylesheet" href="../../assets/css/main.css">
		<link rel="stylesheet" href="../../assets/css/home.css">
		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
		
		<!-- INCLUSÃO JQUERY -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
		 crossorigin="anonymous">
		</script>		
		<script type="text/javascript" src="../../scripts/js/cliente/excluir_cliente.js"></script>
		<script type="text/javascript" src="../../assets/scripts/js/cliente/localiza_cliente.js"></script>	
	</head>

	<body>
		<!-- WRAPPER CSS PARA TELA CHEIA E PARA ADMINISTRAR TUDO DENTRO DA PÁGINA-->
		<div id="wrapper">
			<?php
				require_once MENU_TEMPLATE;
			?>
				<!-- MAIN -->
				<div class="main">		
	  
					<!-- Modal
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">Exclusão de Clientes</h4>
							</div>
							<div class="modal-body">
							Tem certeza que deseja excluir este cliente?
							</div>
							<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
							<button type="button" class="btn btn-primary ex_cliente">Sim</button>
							</div>
						</div>
						</div>
					</div>-->

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
										include ('../../scripts/php/clientes/consulta_clientes_tabela.php');
									?>
								</div>
									
									<!-- END MAIN CONTENT -->

									<!-- END MAIN -->
							</div>

							


							<div class="clearfix"></div>

						</div>

					</div>
					<?php
						require_once FOOTER_TEMPLATE;
					?>
					<!-- END WRAPPER -->
					<!-- Javascript -->
					<script src="../../assets/vendor/jquery/jquery.min.js"></script>
					<script src="../../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
					<script src="../../assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
					<script src="../../assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
					<script src="../../assets/vendor/chartist/js/chartist.min.js"></script>
					<script src="../../assets/scripts/js/navegacao.js"></script>
					
	</body>

	</html>