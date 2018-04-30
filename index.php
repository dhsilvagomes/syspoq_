<?php
	session_start();
	
	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

	$sair = isset($_GET['sair']) ? $_GET['sair'] : 0;
	//Configurações essenciais
    require_once 'scripts\php\config\config.php';
?>


<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | Sys Epok</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

	<!-- jquery - link cdn -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"
	  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	  crossorigin="anonymous"></script>
	<script>
	
            $(document).ready( function(){
                
                var campo_vazio = false;
                
               //verifica se os campos de usuário e senha foram preenchidos
                $('#btn_login').click(function(){
                   
                    if($('#input_email_login').val() == ''){
                        $('#input_email_login').css({'border-color': '#0066ff'});
                        
                        var campo_vazio = true;
                    }else{
                        $('#input_email_login').css({'border-color': '#CCC'});
                    }
                   
                    if($('#input_senha_login').val() == ''){
                       $('#input_senha_login').css({'border-color': '#0066ff'});
                        var campo_vazio = true;
                    }else{
                        $('#input_senha_login').css({'border-color': '#CCC'});
                    }
                    if(campo_vazio){
                        return false;
                    }
                });
                                      
            });
            
		</script>

</head>

<body style="background-color: 	#ADD8E6">
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="" alt=""></div>
								
								<p class="lead">Faça login na sua conta</p>
								
								<?php
									echo'<p></p>';
									if($erro==1){
										echo '<font color="#FF0000">Email ou senha invalidos</font>';
									}

									if($sair==1){
										echo '<font color="#FF0000">Obrigado por Usar o SySPoQ</font>';
									}
								
                           		 ?>       
							</div>
							<form class="form-auth-small" method="post" action="scripts/php/users/valida_acesso.php" id="form_login">
								<div class="form-group">
									<label for="input_email_login" class="control-label sr-only">Email</label>
									<input type="email" class="form-control" id="input_email_login" placeholder="Email" name="email" autofocus="true">
								</div>
								<div class="form-group">
									<label for="input_senha_login" class="control-label sr-only" >Password</label>
									<input type="password" class="form-control" id="input_senha_login" placeholder="Senha" name="senha">
								</div>
								
								<button type="submit" class="btn btn-primary btn-lg btn-block" id="btn_login">LOGIN</button>
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Esqueceu sua senha?</a></span>
								</div>
								<br/><br/>
								<a href="page_cadastro.php">CADASTRE-SE AGORA</a>
							</form>
							
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Login Sys Epok</h1>
							<p>Seu sistema de gerenciamento On Line</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
	<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>
