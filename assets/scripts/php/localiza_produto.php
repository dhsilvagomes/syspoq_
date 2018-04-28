<?php

    //inclue a classe db no script atual
    require_once('db.class.php');
    
    //recebe o id do cliente via POST
    $codigo_produto = $_POST['codigo_produto'];

    //instancia um objeto da classe db
    $objDb = new db();
   
    //instancia um objeto que recebe a função
    //que faz a conexão com o banco de dados
    $link = $objDb->conecta_mysql();

    //query sql para selecionar todos os dados do cliente através do id
    $sql = "SELECT * FROM produtos WHERE id = '$codigo_produto' ";

    //variável para guardar os dados de retorno
    $dados_produto;

    $erro = '';
    if($resultado_id = mysqli_query($link, $sql)) {
        
        $dados_produto = mysqli_fetch_array($resultado_id);
        
    }else{
            $erro = 'Erro ao tentar localizar o registro do produto';
    }

// inicializa as variáveis a vazio
//$check0 = $check1 = $check2 = $check3 = $check4 = "";

/* verificar qual o valor contido na variável $dados_cliente['id_inscricao_estadual']
 * e preencher a variável de marcação com o atributo "selected"
 */
/*switch ($dados_cliente['id_inscricao_estadual']) {
    case "": {
        $check0 = "selected";
        break;
    }
    case "Contribuinte(Possui Insc. Estadual)": {
        $check1 = "selected";
        break;
    }
    case "Não Contribuinte(Não tem Insc. Estadual)": {
        $check2 = "selected";
        break;
    }
    case "ISENTO": {
        $check3 = "selected";
        break;
    }  
 }*/

 $dados_produto['data_insert'] = substr($dados_produto['data_insert'],8,2)."/".substr($dados_produto['data_insert'],5,2)."/".substr($dados_produto['data_insert'],0,4).  " - ".substr($dados_produto['data_insert'],11,15);
    
?>