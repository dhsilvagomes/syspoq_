<?php

    session_start();
    unset($_SESSION['id_usuario']);
    unset($_SESSION['usuario']);
    unset($_SESSION['email']);
    
    header('Location: /syspoq/index.php?sair=1');

?>