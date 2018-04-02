<?php


// Conexão ao banco
require_once('db.class.php');

//instancia um objeto da classe db
$objDb = new db();

//instancia um objeto que recebe a função
//que faz a conexão com o banco de dados
$link = $objDb->conecta_mysql();


$sql = "SELECT id,cnpj,razao_social,inscricao_estadual,telefone FROM clientes";

$consulta = mysqli_query($link,$sql);

echo '<table class="table table-striped table-bordered table-hover" id="table_clientes">';

echo '<thead >';

echo '<tr">';

echo '<th scope="col">#</th>';

echo '<th scope="col">CNPJ</th>';

echo '<th scope="col">Razão Social</th>';

echo '<th scope="col">Inscrição Estadual</th>';

echo '<th scope="col">Telefone</th>';

echo '</tr>';

echo '</thead>';

echo '<tbody>';
// Armazena os dados da consulta em um array associativo

while($registro = mysqli_fetch_array($consulta)){    

echo '<tr>';

echo '<th scope="row" id="'.$registro["id"].'">'.$registro["id"].'</th>';

echo '<td>'.$registro["cnpj"].'</td>';

echo '<td>'.$registro["razao_social"].'</td>';

echo '<td>'.$registro["inscricao_estadual"].'</td>';

echo '<td>'.$registro["telefone"].'</td>';

echo '<td><form action="altera_cliente.php" method="post"><input type="hidden" name="id_cliente" value="'.$registro["id"].'">
<button type="submit" class="btn_alterar_cliente" id="'.$registro["id"].' " title="Editar">
<img src="assets/img/edit.png"></img></button></form></td>';

echo '</tr>';

}

echo '</tbody>';
echo '</table>';



?>
