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

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
            </script>

        <script type='text/javascript' src='assets/scripts/js/carrega_cep.js'></script>
        <script type="text/javascript" src='assets/scripts/js/registra_cliente.js'></script>
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
                                    <h3 class="panel-title">Cadastro de Produtos</h3>
                                </div>
                                <hr />
                                <div id="main" class="container-fluid">

                                    <form method="post" id="form_cliente" name="form_cliente">
                                        <div class="row" id="resultado_salvar_cliente">
                                            <div class="form-group col-md-1">
                                                <label for="codigo_produto">Código</label>
                                                <input class="form-control" id="codigo_produto" name="codigo_produto" readonly="true">
                                            </div>
                                            <div class="form-group col-md-3" id="teste">
                                                <label for="nome_produto">Nome *</label>
                                                <input class="form-control" id="nome_produto" name="nome_produto" autofocus="true" required="true" ;>
                                            </div>
                                            <div class="form-group col-md-8">
                                                <label for="codigo_barras">Código de Barras</label>
                                                <input class="form-control" id="codigo_barras" name="codigo_barras">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="fornecedor">Fornecedor</label>
                                                <input class="form-control" id="fornecedor" name="fornecedor">
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label for="marca">Marca</label>
                                                <select class="form-control" id="marca" name="marca">
                                                    <option></option>

                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="preco_custo">Preço de Custo</label>
                                                <input class="form-control" id="preco_custo" name="preco_custo">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="preco_venda">Preço de Venda</label>
                                                <input class="form-control" id="preco_venda" name="preco_venda">
                                            </div>
                                            <div class="form-group col-md-1">
                                                <label for="qtd_estoque">Estoque</label>
                                                <input class="form-control" id="qtd_estoque" name="qtd_estoque">
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label for="unidade">Unidade</label>
                                                <input class="form-control" id="unidade" name="unidade">
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="peso_bruto">Peso bruto</label>
                                                <input class="form-control" id="peso_bruto" name="peso_bruto">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="peso_liquido">Peso Líquido</label>
                                                <input class="form-control" id="peso_liquido" name="peso_liquido">
                                            </div>
                                            <div class="form-group col-md-3 btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-info active">
                                                    <input type="radio" name="ativo" id="ativo" autocomplete="off" checked> Ativo
                                                </label>
                                                <label class="btn btn-default">
                                                    <input type="radio" name="inativo" id="inativo" autocomplete="off"> Inativo
                                                </label>
                                            </div>   
                                            <div class="form-group col-md-3">
                                                    <label for="situacao_tributaria">Situação Tributária</label>
                                                    <input class="form-control" id="situacao_tributaria" name="situacao_tributaria">
                                            </div>                                         
                                        </div>
                                        

                                        <div class="row">
                                                <div class="form-group col-md-4">
                                                    <label for="origem_produto">Origem Produto</label>
                                                    <input class="form-control" id="origem_produto" name="origem_produto">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="cfop">CFOP</label>
                                                    <input class="form-control" id="cfop" name="cfop">
                                                </div>
                                                <div class="form-group col-md-5">
                                                    <label for="ncm">NCM</label>
                                                    <input class="form-control" id="ncm" name="ncm">
                                                </div>
                                            </div>
            
                                            <div class="row">
                                                    <div class="form-group col-md-4">
                                                        <label for="observacoes">Observações</label>
                                                        <textarea class="form-control" id="observacoes" name="observacoes"rows="3"></textarea>
                                                    </div>                                        
                                                </div>
                                </div>

                                

                                <hr />

                                <div class="row">
                                    <div class="col-md-12" >
                                        <button type="button" id="btn-cadastro-produto" class="btn btn-primary">Salvar</button>
                                        <a href="produto.php" class="btn btn-default">Voltar</a>                                        
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
                            <p class="copyright">&copy; 2018
                                <a href="http://www.epocasistemas.com.br" target="_blank">SyspoQ</a>. Todos direitos Reservados.</p>
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

                new Chartist.Bar('#visits-chart', data, options);


                // real-time pie chart
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
                }

            });
        </script>

        </div>
    </body>

    </html>