<?php

    session_start();

    //Configurações essenciais
    require_once '../config/config.php';

    // Conexão ao banco
    require_once DBAPI;

    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $sql = "SELECT id, nome_usuario, email FROM usuarios_sistema WHERE email = '$email' AND senha = '$senha'";
    
    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $resultado_id = mysqli_query($link,$sql);

    if($resultado_id){
        $dados_usuario = mysqli_fetch_array($resultado_id);

        if(isset($dados_usuario['nome_usuario'])){
            
            $_SESSION['id_usuario'] = $dados_usuario['id'];
            $_SESSION['usuario'] = $dados_usuario['usuario'];
            $_SESSION['email'] = $dados_usuario['email'];
            
            header('Location: /syspoq/layouts/padrao/home.php');
        } else{
            header('Location: /syspoq/index.php?erro=1');
        }
    } else{
        echo 'Erro na execução da consulta';
    }
?>