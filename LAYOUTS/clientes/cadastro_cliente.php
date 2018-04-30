<?php

/*
PROPRIEDADE ÉPOCA TECNOLOGIA

AUTOR E DESENVOLVEDOR: DHOUGLAS SILVA GOMES

SISTEMA: ERP SyspoQ

VERSÃO: 0.1
*/

	session_start();

	if(!isset($_SESSION['id_usuario'])){
			header('Location: ../../index.php?erro=1');
	}
	//Configurações essenciais
	require_once dirname(__FILE__)."/../../scripts/php/config/config.php";
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
	<link rel="stylesheet" href="../../assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="../../assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="../../assets/css/main.css">	
	<link rel="stylesheet" href="../../assets/css/cadastro_cliente.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	
	<!-- ICONS -->
	<link rel="icon" type="image/png" sizes="96x96" href="../../assets/img/favicon_syspoq.ico">

	<script
		src="https://code.jquery.com/jquery-3.3.1.min.js"
		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
		crossorigin="anonymous">
	</script>
C:\xampp\htdocs\syspoq\SCRIPTS\js\others\carrega_cep.js
	<script type='text/javascript' src='../../SCRIPTS/js/others/carrega_cep.js'></script>	
	<script type="text/javascript" src='../../SCRIPTS/js/clientes/registra_cliente.js'></script>
	<script type="text/javascript" src="../../scripts/js/others/mask_cnpj.js"></script>
</head>
<body>
<div id="wrapper">
	<?php

		require_once MENU_TEMPLATE;

	?>
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading" id="head-cadastro-clientes">
							<h3 class="panel-title">Cadastro de Clientes</h3>							
						</div>
						<hr />
						<div id="main" class="container-fluid"> 				  
						  
						<form method="post" id="form_cliente" name="form_cliente">
						  	<div class="row" id="resultado_salvar_cliente">
							  	  <div class="form-group col-md-1">
							  	  	<label for="codigo_cliente">Código</label>
							  	  	<input class="form-control" id="codigo_cliente" name="codigo_cliente" disabled="true">
							  	  </div>
								  <div class="form-group col-md-3" id="teste">
							  	  	<label for="cnpj_cliente">CNPJ *</label>
							  	  	<input class="form-control" id="cnpj_cliente" name="cnpj_cliente" autofocus="true" placeholder="00.000.000/0000-00" required="true" onkeypress='mascaraMutuario(this,cpfCnpj); limitar()';>
							  	  </div>
								  <div class="form-group col-md-8">
							  	  	<label for="nome_razao_cliente">Razão Social</label>
							  	  	<input class="form-control" id="nome_razao_cliente" name="nome_razao_cliente" >
							  	  </div>
							</div>
							
							<div class="row">
							  	  <div class="form-group col-md-4">
							  	  	<label for="inscricao_cliente">Inscrição  Estadual</label>
							  	  	<input class="form-control" id="inscricao_cliente" name="inscricao_cliente" >
							  	  </div>					  
								  <div class="form-group col-md-5">
							  	  	<label for="identificacao_icms">Identificação Inscrição Estadual *</label>
							  	  	<select class="form-control" id="identificacao_icms" name="identificacao_icms" >
							  	  		<option></option>
							  	  		<option>Contribuinte(Possui Insc. Estadual)</option>
							  	  		<option>Não Contribuinte(Não tem Insc. Estadual)</option>
							  	  		<option>Isento</option>

							  	  	</select>
							  	  </div>
								  <div class="form-group col-md-3">
							  	  	<label for="cep">Cep</label>
							  	  	<input class="form-control" id="cep" name="cep" placeholder="79.000-000">
							  	  </div>
							</div>
							
							<div class="row">
						  	  <div class="form-group col-md-6">
						  	  	<label for="rua_cliente">Rua</label>
						  	  	<input class="form-control" id="rua_cliente" name="rua_cliente">
						  	  </div>
							  <div class="form-group col-md-1">
						  	  	<label for="numero_endereco_cliente">Nº</label>
						  	  	<input class="form-control" id="numero_endereco_cliente" name="numero_endereco_cliente" >
						  	  </div>
						  	  <div class="form-group col-md-5">
						  	  	<label for="complemento_endereco_cliente">Complemento</label>
						  	  	<input class="form-control" id="complemento_endereco_cliente" name="complemento_endereco_cliente" placeholder="Ex: Bloco, Apto, Referência...">
						  	  </div>
							</div>
							
							<div class="row">
						  	  <div class="form-group col-md-4">
						  	  	<label for="bairro_cliente">Bairro</label>
						  	  	<input class="form-control" id="bairro_cliente" name="bairro_cliente" >
						  	  </div>
							  <div class="form-group col-md-2">
						  	  	<label for="uf_cliente">UF</label>
						  	  	<input class="form-control" id="uf_cliente" name="uf_cliente">
						  	  </div>
							  <div class="form-group col-md-3">
						  	  	<label for="cidade_cliente">Cidade</label>
						  	  	<input class="form-control" id="cidade_cliente" name="cidade_cliente" >
						  	  </div>
							  <div class="form-group col-md-3">
						  	  	<label for="pais_cliente">País</label>
						  	  	<input class="form-control" id="pais_cliente" name="pais_cliente" value="Brasil">
						  	  </div>
							</div>
							
							<div class="row">
						  	  <div class="form-group col-md-4">
						  	  	<label for="email_cliente">Email</label>
						  	  	<input type="email" class="form-control" id="email_cliente" name="email_cliente" >
						  	  </div>
							  <div class="form-group col-md-3">
						  	  	<label for="telefone_cliente">Telefone</label>
						  	  	<input class="form-control" id="telefone_cliente" name="telefone_cliente" >
						  	  </div>
						  	  <div class="form-group col-md-5">
						  	  	<label for="observacao_cliente">Observações</label>
						  	  	<input class="form-control" id="observacao_cliente" name="observacao_cliente" >
						  	  </div>


							</div>
							
							<hr />
							
							<div class="row">
							  <div class="col-md-12" id="btn-cadastro-cliente">
							  	<button type="button" id="btn_salva_cliente" class="btn btn-primary">Salvar</button>
								<a href="../../layouts/clientes/clientes.php" class="btn btn-default">Voltar</a>
								<!--<button type="button" id="btn_consulta_cnpj" class="btn btn-primary">Consulta CNPJ</button>-->
							  </div>
							</div>

						</form>  
				 </div>
                </div>
            </div>
					<!--  END OVERVIEW -->
					
		<div class="clearfix"></div>
		<?php
			require_once FOOTER_TEMPLATE;
		?>
	</div>
</div>
</div>

	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="../../assets/vendor/jquery/jquery.min.js"></script>
	<script src="../../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../../assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../../assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="../../assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="../../scripts/js/others/navegacao.js"></script>	
</div>
</body>
</html>