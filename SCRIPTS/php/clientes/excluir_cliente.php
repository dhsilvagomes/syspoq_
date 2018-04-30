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
    $id_post = $_POST['id'];
        
    //instancia um objeto da classe db
    $objDb = new db();

    //instancia um objeto que recebe a função
    //que faz a conexão com o banco de dados
    $link = $objDb->conecta_mysql();
    
    $sql1 = " DELETE FROM clientes WHERE id='$id_post'";
    
        
    //executa query
    if(mysqli_query($link, $sql1)){            
            echo 'Cliente Excluido com sucesso!! ';     
    }else{                   
            echo 'ERRO AO EXCLUIR CLIENTE!!';       
            return false;    
    }

    
?>