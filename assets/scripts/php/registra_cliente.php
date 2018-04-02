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

    //inclue a classe db no script atual
    require_once('db.class.php');

    //recuperando os dados do formulario de 
    //cadastro de Clientes via Método POST        
    //e atribuindo a uma variável
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
    
    $imprime = '';
    //verificar se o cnpj já existe            
    
    $sql = "SELECT * FROM clientes WHERE cnpj = '$cnpj_cliente' ";

    if($resultado_id = mysqli_query($link, $sql)) {
        
        $dados_cliente = mysqli_fetch_array($resultado_id);
        
        if(isset($dados_cliente['cnpj'])){
            $cnpj_existe = true;
        }
        
    }else{
            echo 'Erro ao tentar localizar o registro de cnpj';
        }

    if($cnpj_existe){        
                 echo 'CNPJ já CADASTRADO';   
                 
                 die();
    }    

    $sql1 = " INSERT INTO clientes(cnpj, razao_social, inscricao_estadual, id_inscricao_estadual, cep, rua,";
    $sql1 .= " numero_endereco, complemento, bairro, uf, cidade, pais, email, telefone, observacoes) ";
    $sql1 .= " VALUES ('$cnpj_cliente', '$nome_razao_cliente', '$inscricao_cliente', '$identificacao_icms',";
    $sql1 .= " '$cep', '$rua_cliente', '$numero_endereco_cliente', '$complemento_endereco_cliente',";
    $sql1 .= " '$bairro_cliente', '$uf_cliente', '$cidade_cliente', '$pais_cliente', '$email_cliente', ";
    $sql1 .= " '$telefone_cliente', '$observacao_cliente' )";
    
    //executa query
    if(mysqli_query($link, $sql1)){            
            echo 'Parabéns CLIENTE CADASTRADO!! ';     
    }else{                   
            echo 'ERRO AO CADASTRAR CLIENTE!!';           
    }

    
?>