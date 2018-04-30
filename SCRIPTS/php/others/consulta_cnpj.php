<?php

$cnpj_cliente = $_POST['cnpj_cliente'];

$json_file = file_get_contents("https://www.receitaws.com.br/v1/cnpj/"+ $cnpj_cliente);   
/*echo json_decode($json_file);*/

echo json_encode($json_file);


?>