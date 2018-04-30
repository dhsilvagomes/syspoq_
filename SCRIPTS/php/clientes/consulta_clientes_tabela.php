<?php

//Configurações essenciais
require_once dirname(__FILE__)."/../config/config.php";

// Conexão ao banco
require_once DBAPI;

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

echo '<th scope="col" class="oculta_tabela">CNPJ</th>';

echo '<th scope="col" >Razão Social</th>';

echo '<th scope="col"  class="oculta_tabela">Inscrição Estadual</th>';

echo '<th scope="col" >Telefone</th>';

echo '</tr>';

echo '</thead>';

echo '<tbody>';
// Armazena os dados da consulta em um array associativo

while($registro = mysqli_fetch_array($consulta)){    

echo '<tr>';

echo '<th scope="row" id="'.$registro["id"].'">'.$registro["id"].'</th>';

echo '<td class="oculta_tabela">'.$registro["cnpj"].'</td>';

echo '<td>'.$registro["razao_social"].'</td>';

echo '<td class="oculta_tabela">'.$registro["inscricao_estadual"].'</td>';

echo '<td>'.$registro["telefone"].'</td>';

echo '<td>
        <form action="altera_cliente.php" method="post" style="display:inline;">
        
            <input type="hidden" name="id_cliente" value="'.$registro["id"].'">
        
            <button type="submit" class="btn-link btn_alterar_cliente" id="alt'.$registro["id"].' " title="Editar"  style"display:inline;>
        
            <img src="https://png.icons8.com/office/16/000000/edit.png">

            </button>
        
        </form>        
        
        
            <button type="button" class="btn-link ex_cliente" id="'.$registro["id"].'" title="Excluir" style"display:inline;" data-toggle="modal" data-target="#myModal">
        
            <img src="https://png.icons8.com/ios-glyphs/20/000000/cancel.png">

            </button>
        
      </td>';

echo '</tr>';

}

echo '</tbody>';
echo '</table>';



?>
