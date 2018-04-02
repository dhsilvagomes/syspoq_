<<!doctype html>
<html lang="pt-br">

<head>
	<title>Dashboard | SyspoQ</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER CSS PARA TELA CHEIA E PARA ADMINISTRAR TUDO DENTRO DA PÁGINA-->
	<div id="wrapper">
		<!-- NAVBAR - BARRA DE NAVEGAÇÃO SUPERIOR-->
		<?php

			include "menu_padrao.php";

		?>
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Elements</h3>
					<div class="row">
						<div class="col-md-6">
							<!-- BUTTONS -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Buttons</h3>
								</div>
								<div class="panel-body">
									<p class="demo-button">
										<button type="button" class="btn btn-default">Default</button>
										<button type="button" class="btn btn-primary">Primary</button>
										<button type="button" class="btn btn-info">Info</button>
										<button type="button" class="btn btn-success">Success</button>
										<button type="button" class="btn btn-warning">Warning</button>
										<button type="button" class="btn btn-danger">Danger</button>
									</p>
									<br>
									<p class="demo-button">
										<button type="button" class="btn btn-primary btn-lg">Large Size</button>
										<button type="button" class="btn btn-primary">Default Size</button>
										<button type="button" class="btn btn-primary btn-sm">Small Size</button>
										<button type="button" class="btn btn-primary btn-xs">Extra Small Size</button>
									</p>
									<br>
									<p class="demo-button">
										<button type="button" class="btn btn-default"><i class="fa fa-plus-square"></i> Default </button>
										<button type="button" class="btn btn-primary"><i class="fa fa-refresh"></i> Primary</button>
										<button type="button" class="btn btn-info"><i class="fa fa-info-circle"></i> Info</button>
										<button type="button" class="btn btn-primary" disabled="disabled"><i class="fa fa-refresh fa-spin"></i> Refreshing...</button>
									</p>
									<br>
									<p class="demo-button">
										<button type="button" class="btn btn-success"><i class="fa fa-check-circle"></i> Success</button>
										<button type="button" class="btn btn-warning"><i class="fa fa-warning"></i> Warning</button>
										<button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i> Danger</button>
										<button type="button" class="btn btn-primary" disabled="disabled"><i class="fa fa-spinner fa-spin"></i> Loading...</button>
									</p>
									<br>
									<div class="row">
										<div class="col-md-6">
											<button type="button" class="btn btn-primary btn-block">Button Block</button>
										</div>
										<div class="col-md-6">
											<button type="button" class="btn btn-warning btn-block">Button Block</button>
										</div>
									</div>
								</div>
							</div>
							<!-- END BUTTONS -->
							<!-- INPUTS -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Inputs</h3>
								</div>
								<div class="panel-body">
									<input type="text" class="form-control" placeholder="text field">
									<br>
									<input type="password" class="form-control" value="asecret">
									<br>
									<textarea class="form-control" placeholder="textarea" rows="4"></textarea>
									<br>
									<select class="form-control">
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
										<option value="pepperoni">Pepperoni</option>
										<option value="onions">Onions</option>
									</select>
									<br>
									<label class="fancy-checkbox">
										<input type="checkbox">
										<span>Fancy Checkbox 1</span>
									</label>
									<label class="fancy-checkbox">
										<input type="checkbox">
										<span>Fancy Checkbox 2</span>
									</label>
									<label class="fancy-checkbox">
										<input type="checkbox">
										<span>Fancy Checkbox 3</span>
									</label>
									<br>
									<label class="fancy-radio">
										<input name="gender" value="male" type="radio">
										<span><i></i>Male</span>
									</label>
									<label class="fancy-radio">
										<input name="gender" value="female" type="radio">
										<span><i></i>Female</span>
									</label>
								</div>
							</div>
							<!-- END INPUTS -->
							<!-- INPUT SIZING -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Input Sizing</h3>
								</div>
								<div class="panel-body">
									<input class="form-control input-lg" placeholder=".input-lg" type="text">
									<br>
									<input class="form-control" placeholder="Default input" type="text">
									<br>
									<input class="form-control input-sm" placeholder=".input-sm" type="text">
									<br>
									<select class="form-control input-lg">
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
										<option value="pepperoni">Pepperoni</option>
										<option value="onions">Onions</option>
									</select>
									<br>
									<select class="form-control">
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
										<option value="pepperoni">Pepperoni</option>
										<option value="onions">Onions</option>
									</select>
									<br>
									<select class="form-control input-sm">
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
										<option value="pepperoni">Pepperoni</option>
										<option value="onions">Onions</option>
									</select>
								</div>
							</div>
							<!-- END INPUT SIZING -->
						</div>
						<div class="col-md-6">
							<!-- LABELS -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Labels &amp; Badges</h3>
								</div>
								<div class="panel-body">
									<span class="label label-default">DEFAULT</span>
									<span class="label label-primary">PRIMARY</span>
									<span class="label label-success">SUCCESS</span>
									<span class="label label-info">INFO</span>
									<span class="label label-warning">WARNING</span>
									<span class="label label-danger">DANGER</span>
									<br>
									<br>
									<a href="#">Inbox <span class="badge">42</span></a>
									<br>
									<br>
									<button class="btn btn-primary" type="button">
										Messages <span class="badge">4</span>
									</button>
								</div>
							</div>
							<!-- END LABELS -->
							<!-- PROGRESS BARS -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Progress Bars</h3>
								</div>
								<div class="panel-body">
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
											<span class="sr-only">60% Complete</span>
										</div>
									</div>
									<div class="progress">
										<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
											<span class="sr-only">60% Complete (warning)</span>
										</div>
									</div>
									<div class="progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
											<span class="sr-only">60% Complete (success)</span>
										</div>
									</div>
									<div class="progress">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
											<span class="sr-only">60% Complete (danger)</span>
										</div>
									</div>
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
											75%
										</div>
									</div>
									<div class="progress">
										<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
											<span class="sr-only">20% Complete</span>
										</div>
									</div>
									<div class="progress">
										<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
											<span class="sr-only">45% Complete</span>
										</div>
									</div>
									<div class="progress progress-xs">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
											<span class="sr-only">80% Complete</span>
										</div>
									</div>
								</div>
							</div>
							<!-- END PROGRESS BARS -->
							<!-- INPUT GROUPS -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Input Groups</h3>
								</div>
								<div class="panel-body">
									<div class="input-group">
										<input class="form-control" type="text">
										<span class="input-group-btn"><button class="btn btn-primary" type="button">Go!</button></span>
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-btn">
							<button class="btn btn-primary" type="button">Go!</button>
						</span>
										<input class="form-control" type="text">
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input class="form-control" placeholder="Username" type="text">
									</div>
									<br>
									<div class="input-group">
										<input class="form-control" placeholder="Username" type="text">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon">$</span>
										<input class="form-control" type="text">
										<span class="input-group-addon">.00</span>
									</div>
								</div>
							</div>
							<!-- END INPUT GROUPS -->
							<!-- ALERT MESSAGES -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Alert Messages</h3>
								</div>
								<div class="panel-body">
									<div class="alert alert-info alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-info-circle"></i> The system is running well
									</div>
									<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Your settings have been succesfully saved
									</div>
									<div class="alert alert-warning alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-warning"></i> Warning, check your permission settings
									</div>
									<div class="alert alert-danger alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-times-circle"></i> Your account has been suspended
									</div>
								</div>
							</div>
							<!-- END ALERT MESSAGES -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>
