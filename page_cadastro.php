<?php
	
	$erro_email = isset($_GET['erro_email']) ? $_GET['erro_email'] : 0;

?>

<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | Sys Epok</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	
	<!-- LINK DE RELACIONAMENTO COM O BOOTSTRAP -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Mukta+Mahee" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

	<script type="text/javascript">			
			function retorna_index(){
				location.href = "index.php";
			}
		
	</script>
</head>

<body style="background-color: #F3F5F8; font-family: 'Mukta Mahee', sans-serif; ">

	<div class="container">
		<nav class="navbar navbar-light bg-faded col-lg-12 col-md-10 col-sd-8 col-xs-2" style="background-color: red;">
  			<h1 class="navbar-brand mb-0" style="color:white; font-size: 2em; ">Sistema de Gestão Épok</h1>
		</nav>

		<div class="col-xs-12"><h3>Faça agora seu Cadastro:</h3></div>


		<form method="post" action="assets\scripts\registra_usuario.php" id="form_cadastro_usuario" >
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="input_email_cadastro">Email</label>
		      <input type="email" class="form-control" id="input_email_cadastro" name="email" placeholder="Email" autofocus="true" required="true" >
				<?php
					if($erro_email){
						echo '<font style="color:#FF0000">Email já existe</font>';
					}
				?>
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Senha</label>
		      <input type="password" class="form-control" id="input_senha_cadastro" name="senha" placeholder="senha" required="true">
		    </div>
		  </div>

		  <div class="form-row">
		  	<div class="form-group col-md-6">
		  		<label for="input_nome_cadastro">Nome</label>
		    	<input type="text" class="form-control" id="input_nome_cadastro" name="nome" placeholder="Ex: João da Silva" required="true">
		  	</div>

		  	<div class="form-group col-md-6">
			    <label for="input_endereco_cadastro">Endereço</label>
			    <input type="text" class="form-control" id="input_endereco_cadastro" name="endereco" placeholder="Rua:123          n:32">
		  	</div>

		  </div>
		  
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="input_cidade_cadastro">Cidade</label>
		      <input type="text" class="form-control" id="input_cidade_cadastro" name="cidade">
		    </div>
		    <div class="form-group col-md-4">
		      <label for="input_cadastro_uf">Estado</label>
		      <select id="input_cadastro_uf" name="uf" class="form-control" required="true">
		        <option selected ></option>
		        <option>Acre-AC</option>
		        <option>Alagoas-AL</option>	 
				<option>Amapá-AP</option>	 
				<option>Amazonas-AM</option>	 
				<option>Bahia-BA</option>	 
				<option>Ceará-CE</option>	 
				<option>Distrito Federal-DF</option>	 
				<option>Espírito Santo-ES</option>	 
				<option>Goiás-GO</option>	 
				<option>Maranhão-MA</option>	 
				<option>Mato Grosso-MT</option>	 
				<option>Mato Grosso do Sul-MS</option>	 
				<option>Minas Gerais-MG</option>	 
				<option>Pará-PA</option>	 
				<option>Paraíba-PB</option>	 
				<option>Paraná-PR</option>	 
				<option>Pernambuco-PE</option>	 
				<option>Piauí-PI</option>	 
				<option>Rio de Janeiro-RJ</option>	 
				<option>Rio Grande do Norte-RN</option>	 
				<option>Rio Grande do Sul-RS</option>	 
				<option>Rondônia-RO</option>	 
				<option>Roraima-RR</option>	 
				<option>Santa Catarina-SC</option>	 
				<option>São Paulo-SP</option>	 
				<option>Sergipe-SE</option>
				<option>Tocantins-TO</option>
		      </select>
		    </div>
		    <div class="form-group col-md-2">
		      <label for="inputZip">Cep</label>
		      <input type="text" class="form-control" id="input_cep_cadastro" name="cep">
		    </div>
		  </div>
		 
		  <div class="row">
			<span class="col-md-2"></span>
			<button type="submit" class="col-md-3 btn btn-primary " >Cadastrar</button>
			<span class="col-md-2"></span>
			<button  class="col-md-3 btn btn-default " onclick="retorna_index()">Sair</button>
		</div>

		</form>
		


	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>