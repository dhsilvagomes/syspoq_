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
        require_once '../config/config.php';

        // Conexão ao banco
        require_once DBAPI;

    //recuperando os dados do formulario de 
    //cadastro de Clientes via Método POST        
    //e atribuindo a uma variável

    $codigo_produto = $_POST['codigo_produto'];
    $nome_produto = $_POST['nome_produto'];
    $codigo_barras = $_POST['codigo_barras'];
    $fornecedor = $_POST['fornecedor'];
    $marca = $_POST['marca'];
    $preco_custo = $_POST['preco_custo'];
    $preco_venda = $_POST['preco_venda'];
    $unidade = $_POST['unidade'];
    $qtd_estoque = $_POST['qtd_estoque'];
    $peso_bruto = $_POST['peso_bruto'];
    $peso_liquido = $_POST['peso_liquido'];
    $ativo = $_POST['ativo'];
    $situacao_tributaria = $_POST['situacao_tributaria'];
    $origem_produto = $_POST['origem_produto'];
    $cfop = $_POST['cfop'];
    $ncm = $_POST['ncm'];
    $observacoes = $_POST['observacoes'];
    
    //instancia um objeto da classe db
    $objDb = new db();

    //instancia um objeto que recebe a função
    //que faz a conexão com o banco de dados
    $link = $objDb->conecta_mysql();

    //variável utilizada para verificar se
    //o usuário e o email já existe
    $cnpj_existe = false;
    
    $sql1 = " UPDATE produtos SET nome='$nome_produto' , codigo_de_barras='$codigo_barras', ";
    $sql1 .= "fornecedor='$fornecedor', marca='$marca',";
    $sql1 .= "preco_custo='$preco_custo', preco_venda='$preco_venda',qtd_estoque='$qtd_estoque',";
    $sql1 .= "unidade='$unidade', peso_bruto='$peso_bruto',";
    $sql1 .= "peso_liquido='$peso_liquido', ativo_excluido= '$ativo', situacao_tributaria='$situacao_tributaria',";
    $sql1 .= "origem_produto='$origem_produto', cfop='$cfop', ncm='$ncm', observacoes='$observacoes' WHERE id='$codigo_produto'";        
        
    //executa query
    if(mysqli_query($link, $sql1)){            
            echo 'Produto Alterado com sucesso!! ';     
    }else{                   
            echo 'ERRO AO CADASTRAR PRODUTO!!';           
    }

    
?>