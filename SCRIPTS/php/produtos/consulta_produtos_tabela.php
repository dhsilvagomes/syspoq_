<?php


//Configurações essenciais
require_once '../config/config.php';

// Conexão ao banco
require_once DBAPI;

//instancia um objeto da classe db
$objDb = new db();

//instancia um objeto que recebe a função
//que faz a conexão com o banco de dados
$link = $objDb->conecta_mysql();


$sql = "SELECT id,nome,preco_venda,qtd_estoque FROM produtos";

$consulta = mysqli_query($link,$sql);

echo '<table class="table table-striped table-bordered table-hover" id="table_produtos">';

echo '<thead >';

echo '<tr">';

echo '<th scope="col">#</th>';

echo '<th scope="col">Descrição</th>';

echo '<th scope="col" class="oculta_tabela">Preço</th>';

echo '<th scope="col">Estoque</th>';

echo '</tr>';

echo '</thead>';

echo '<tbody>';
// Armazena os dados da consulta em um array associativo

while($registro = mysqli_fetch_array($consulta)){    

echo '<tr>';

echo '<th scope="row" id="'.$registro["id"].'">'.$registro["id"].'</th>';

echo '<td>'.$registro["nome"].'</td>';

echo '<td class="oculta_tabela">'.$registro["preco_venda"].'</td>';

echo '<td>'.$registro["qtd_estoque"].'</td>';

echo '<td>

        <form action="altera_produto.php" method="post" style="display:inline;">
        
            <input type="hidden" name="id_produto" value="'.$registro["id"].'">
        
            <button type="submit" class="btn-link btn_alterar_produto" id="alt'.$registro["id"].' " title="Editar"  style"display:inline;>
        
            <img src="https://png.icons8.com/office/16/000000/edit.png">

            </button>
        
        </form>        
        
        
            <button type="button" class="btn-link ex_produto" id="'.$registro["id"].'" title="Excluir" style"display:inline;" data-toggle="modal" data-target="#myModal">
        
            <img src="https://png.icons8.com/ios-glyphs/20/000000/cancel.png">

            </button>
        
      </td>';

echo '</tr>';

}

echo '</tbody>';
echo '</table>';



?>
