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
    //Configurações essenciais
    require_once 'assets\scripts\php\config.php';
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
		integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
        <link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
        
        <!-- MAIN CSS -->        
        <link rel="stylesheet" href="assets/css/main.css">
        
        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

        <!-- ICONS -->        
        <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

        <!-- SCRIPTS PERSONALIZADOS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" 
        crossorigin="anonymous"></script>        
        <script type="text/javascript" src='assets/scripts/js/registra_produto.js'></script>
        
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
                                <div class="panel-heading" id="head-cadastro-produtos">
                                    <h3 class="panel-title">Cadastro de Produtos</h3>
                                </div>
                                <hr />
                                <div id="main" class="container-fluid">

                                    <form method="post" id="form_produto" name="form_produto">
                                        <div class="row">
                                            <div class="form-group col-md-2">
                                                <label for="codigo_produto">Código</label>
                                                <input class="form-control" id="codigo_produto" name="codigo_produto" readonly="true">
                                            </div>
                                            <div class="form-group col-md-7">
                                                <label for="nome_produto">Nome *</label>
                                                <input class="form-control" id="nome_produto" name="nome_produto" autofocus="true" required="true" ;>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="codigo_barras">Código de Barras</label>
                                                <input class="form-control" id="codigo_barras" name="codigo_barras">
                                            </div>
                                        </div>

                                        <div class="row">
                                        <div class="form-group col-md-5">
                                                <label for="fornecedor">Fornecedor</label>
                                                <select class="form-control" id="fornecedor" name="fornecedor">
                                                    <option></option>

                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="marca">Marca</label>
                                                <select class="form-control" id="marca" name="marca">
                                                    <option></option>

                                                </select>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="preco_custo">Preço de Custo</label>
                                                <input class="form-control" id="preco_custo" name="preco_custo" placeholder="1,00">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="preco_venda">Preço de Venda</label>
                                                <input class="form-control" id="preco_venda" name="preco_venda" placeholder="1,00">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-2">
                                                    <label for="ativo">Unidade</label>
                                                    <select class="form-control" id="unidade" name="unidade">
                                                        <option></option>
                                                        <option >CX</option>
                                                        <option >UN</option>
    
                                                    </select>                                                
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="qtd_estoque">Estoque</label>
                                                <input class="form-control" id="qtd_estoque" name="qtd_estoque">
                                            </div>
                                            
                                            <div class="form-group col-md-2">
                                                <label for="peso_bruto">Peso bruto</label>
                                                <input class="form-control" id="peso_bruto" name="peso_bruto">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="peso_liquido">Peso Líquido</label>
                                                <input class="form-control" id="peso_liquido" name="peso_liquido">
                                            </div>

                                            <div class="form-group col-md-3">
                                                    <label for="ativo">Produto está Ativo</label>
                                                    <select class="form-control" id="ativo" name="ativo">
                                                        <option></option>
                                                        <option class="btn-primary">Sim</option>
                                                        <option class="btn-danger">Não</option>
    
                                                    </select>
                                            </div>   

                                        </div>
                                        <hr />
                                        <div class="row">
                                           
                                             <div class="form-group col-md-3">
                                                <label for="situacao_tributaria">Situação Tributária</label>
                                                <select class="form-control" id="situacao_tributaria" name="situacao_tributaria">
                                                    <option></option>

                                                </select>
                                            </div>       
                                            
                                            <div class="form-group col-md-2">
                                                <label for="origem_produto">Origem Produto</label>
                                                <select class="form-control" id="origem_produto" name="origem_produto">
                                                    <option></option>

                                                </select>
                                            </div> 

                                            <div class="form-group col-md-3">
                                                <label for="cfop">CFOP</label>
                                                <select class="form-control" id="cfop" name="cfop">
                                                    <option></option>

                                                </select>
                                            </div> 

                                            <div class="form-group col-md-4">
                                                <label for="ncm">NCM</label>
                                                <select class="form-control" id="ncm" name="ncm">
                                                    <option></option>

                                                </select>
                                            </div> 

                                        </div>
                                        
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="observacoes">Observações</label>
                                                    <textarea class="form-control" id="observacoes" name="observacoes" rows="3"></textarea>
                                            </div>                                        
                                        </div>
                                        
                                        <hr />
                                        
                                        <div class="row">
                                            <div class="col-md-12" >
                                            <button type="button" id="btn-cadastro-produto" class="btn btn-primary">Salvar</button>
                                            <a href="produtos.php" class="btn btn-default">Voltar</a>                                        
                                        </div>
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
        <script src="assets/vendor/jquery/jquery.min.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>     
        <script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
        <script src="assets/vendor/chartist/js/chartist.min.js"></script>
        <script src="assets/scripts/js/navegacao.js"></script>
        

        </div>
    </body>

    </html>