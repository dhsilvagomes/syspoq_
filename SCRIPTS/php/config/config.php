<?php		
                
        /** O nome do banco de dados*/	
        define('DB_NAME', 'u165741245_sysdb');

        /** Usuário do banco de dados MySQL */	
        define('DB_USER', 'u165741245_root');		

        /** Senha do banco de dados MySQL */	
        define('DB_PASSWORD', 'Epoca6654..');		

        /** nome do host do MySQL */	
        define('DB_HOST', 'sql133.main-hosting.eu.');		

        /** caminho absoluto para a pasta do sistema **/	
        if ( !defined('ABSPATH') )		
                define('ABSPATH', dirname(__FILE__) . '/');			
                
        /** caminho no server para o sistema **/	
        if ( !defined('BASEURL') )		
                define('BASEURL', '/syspoq/');			
                
        /** caminho do arquivo de banco de dados **/	
        if ( !defined('DBAPI') )		
                define('DBAPI', ABSPATH . 'db.class.php');

        /** caminhos dos templates de header e footer **/	
        define('MENU_TEMPLATE','../../layouts/padrao/menu_padrao.php');	
        define('FOOTER_TEMPLATE','../../layouts/padrao/footer.php');

?>