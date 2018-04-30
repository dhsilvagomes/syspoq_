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
    //cadastro de Produtos via Método POST        
    //e atribuindo a uma variável
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

    $sql1 = " INSERT INTO produtos(nome, codigo_de_barras, fornecedor, marca, preco_custo, preco_venda,";
    $sql1 .= " qtd_estoque, unidade, peso_bruto, peso_liquido, ativo_excluido, situacao_tributaria,";
    $sql1 .= " origem_produto, cfop, ncm, observacoes) ";
    $sql1 .= " VALUES ('$nome_produto', '$codigo_barras', '$fornecedor', '$marca',";
    $sql1 .= " '$preco_custo', '$preco_venda', '$qtd_estoque', '$unidade',";
    $sql1 .= " '$peso_bruto', '$peso_liquido', '$ativo', '$situacao_tributaria', '$origem_produto', ";
    $sql1 .= " '$cfop', '$ncm', '$observacoes' )";
    
    //executa query
    if(mysqli_query($link, $sql1)){            
            echo 'Parabéns PRODUTO CADASTRADO!! ';     
    }else{                   
            echo 'ERRO AO CADASTRAR PRODUTO!!';           
    }

    
?>