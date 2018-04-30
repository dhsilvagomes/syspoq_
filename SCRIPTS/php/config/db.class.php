<?php

    //classe para conexão ao banco  de dados

    class db{
        
       /* //host de hospedagem do banco de dados
        private $host = 'sql133.main-hosting.eu.';
        
        //usuario de acesso ao banco de dados
        private $usuario = 'u165741245_root';      
        
        //senha do usuario do banco de dados
        private $senha = 'Epoca6654..';
        
        //nome do banco de dados
        private $database = 'u165741245_sysdb';*/

        public function conecta_mysql(){
            try {
            //função  que faz a conexão com o banco de dados propriamente dita    
            //criar conexao
//            $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
                $con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);          
            //ajusta o charset do banco de dados com a aplicação
                mysqli_set_charset($con, 'utf8');
                return $con;
            }catch(Exception $e){
            
                if(mysqli_connect_errno()){
                //condição que verifica erro de conexao de bd    
                    echo'Erro ao tentar se conectar com o BD MySQL:'.mysqli_connect_error();
                }
                echo $e->getMessage();
                return null;
            
            }
        }

        public function close_mysql($con) {		
            try {			
                mysqli_close($con);		
            } catch (Exception $e) {			
                echo $e->getMessage();		
            }	
        }

    }

    
?>