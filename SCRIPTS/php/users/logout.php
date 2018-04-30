<?php
    //Configurações essenciais
    require_once '../config/config.php';

    // Conexão ao banco
    require_once DBAPI;

//    close_mysql($con);
    session_start();
    unset($_SESSION['id_usuario']);
    unset($_SESSION['usuario']);
    unset($_SESSION['email']);
    
    header('Location: /syspoq/index.php?sair=1');

?>