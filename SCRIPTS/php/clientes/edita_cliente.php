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
        require_once dirname(__FILE__)."/../config/config.php";

        // Conexão ao banco
        require_once DBAPI;

    //recuperando os dados do formulario de 
    //cadastro de Clientes via Método POST        
    //e atribuindo a uma variável
    $id_post = $_POST['id_post'];
    $cnpj_cliente = $_POST['cnpj_cliente'];
    $nome_razao_cliente = $_POST['nome_razao_cliente'];
    $inscricao_cliente = $_POST['inscricao_cliente'];
    $identificacao_icms = $_POST['identificacao_icms'];
    $cep = $_POST['cep'];
    $rua_cliente = $_POST['rua_cliente'];
    $numero_endereco_cliente = $_POST['numero_endereco_cliente'];
    $complemento_endereco_cliente = $_POST['complemento_endereco_cliente'];
    $bairro_cliente = $_POST['bairro_cliente'];
    $uf_cliente = $_POST['uf_cliente'];
    $cidade_cliente = $_POST['cidade_cliente'];
    $pais_cliente = $_POST['pais_cliente'];
    $email_cliente = $_POST['email_cliente'];
    $telefone_cliente = $_POST['telefone_cliente'];
    $observacao_cliente = $_POST['observacao_cliente'];
    
    //instancia um objeto da classe db
    $objDb = new db();

    //instancia um objeto que recebe a função
    //que faz a conexão com o banco de dados
    $link = $objDb->conecta_mysql();

    //variável utilizada para verificar se
    //o usuário e o email já existe
    $cnpj_existe = false;
    
    $sql1 = " UPDATE clientes SET cnpj='$cnpj_cliente' , razao_social='$nome_razao_cliente', ";
    $sql1 .= "inscricao_estadual='$inscricao_cliente', id_inscricao_estadual='$identificacao_icms',";
    $sql1 .= "cep='$cep', rua='$rua_cliente',numero_endereco='$numero_endereco_cliente',";
    $sql1 .= "complemento='$complemento_endereco_cliente', bairro='$bairro_cliente',";
    $sql1 .= "uf='$uf_cliente', cidade= '$cidade_cliente', pais='$pais_cliente',";
    $sql1 .= "email='$email_cliente', telefone='$telefone_cliente', observacoes='$observacao_cliente' WHERE id='$id_post'";        
        
    //executa query
    if(mysqli_query($link, $sql1)){            
            echo 'Cliente Alterado com sucesso!! ';     
    }else{                   
            echo 'ERRO AO CADASTRAR CLIENTE!!';           
    }

    
?>