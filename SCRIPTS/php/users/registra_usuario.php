<?php
    
    //Configurações essenciais
    require_once '../config/config.php';

    // Conexão ao banco
    require_once DBAPI;

    //recuperando os dados do formulario de 
    //cadastro de usuários via Método POST        
    //e atribuindo a uma variável
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $cep = $_POST['cep'];
    
    //instancia um objeto da classe db
    $objDb = new db();

    //instancia um objeto que recebe a função
    //que faz a conexão com o banco de dados
    $link = $objDb->conecta_mysql();

    //variável utilizada para verificar se
    //o usuário e o email já existe
    $usuario_existe = false;
    $email_existe = false;
    
    //verificar se o cnpj já existe    
    /*$sql = "SELECT * FROM usuarios_sistema WHERE nome_usuario = '$nome' ";
    if($resultado_id = mysqli_query($link, $sql)) {
        
        $dados_usuario = mysqli_fetch_array($resultado_id);
        
        if(isset($dados_usuario['usuario'])){
            $usuario_existe = true;
        }
    }else{
        echo 'Erro ao tentar localizar o registro de usuario';
    }*/

    //query para selecionar conforme o email que o usuário digitar
    //no input para verificando se já existe no banco de dados
    //o e-mail
    
    $sql = "SELECT * FROM usuarios_sistema WHERE email = '$email' ";
    if($resultado_id = mysqli_query($link, $sql)) {
        
        $dados_usuario = mysqli_fetch_array($resultado_id);
        
        if(isset($dados_usuario['email'])){
            $email_existe = true;
        }
        }else{
            echo 'Erro ao tentar localizar o registro de email';
        }

    if($email_existe){
        
        $retorno_get = '';
               
        if($email_existe){
            $retorno_get.= "erro_email=1&";
        }
        
        header('Location: /SYS_EPOK/page_cadastro.php?'.$retorno_get);
        die();
    }    

    $sql1 = " INSERT INTO usuarios_sistema(nome_usuario, email, senha, cep, cidade, endereco, uf) ";
    $sql1 .= " VALUES ('$nome', '$email', '$senha', '$cep', '$cidade', '$endereco', '$uf')";
    
    //executa query
    if(mysqli_query($link, $sql1)){
        echo'Usuário registrado com  sucesso!';
    }else{
        echo 'Erro ao registrar o usuário!';
    }

?>