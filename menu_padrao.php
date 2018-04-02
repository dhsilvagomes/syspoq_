
		<!-- NAVBAR - BARRA DE NAVEGAÇÃO SUPERIOR-->
		<nav class="navbar navbar-default navbar-fixed-top">
			<!--LOGOMARCA-->
            <div class="brand">
				<a href="home.php"><img src="assets/img/syspoq_alterado.png" alt="Época Logo" class="img-responsive logo"></a>
			</div>
            
            <!-- NAVBAR SUPERIOR - COMEÇO DO CONTAINER-->
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>     
               
                
                <!-- BARRA DE NAVEGAÇÃO LATERAL DIREITA-->
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						
                        <!--INFORMAÇÃO DE QUEM ESTÁ UTILIZANDO O SISTEMA-->
                        <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.jpg" class="img-circle" alt="Avatar"> <span>Dhouglas</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>Meu Perfil</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Ticket Suporte</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Configurações</span></a></li>
								<li><a href="assets/scripts/php/logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>

					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">						
                        <li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Cadastros</span> <i class="icon-submenu lnr lnr-chevron-left"></i>
							</a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="home.php" class="">Clientes</a></li>
									<a href="cadastro_produto.php" class="">Produtos</a>
									<!--<li><a href="#" class="">Fornecedores</a></li>-->
								</ul>
							</div>
						</li>						
					</ul>
				</nav>
			</div>
		</div>
		
     
	
