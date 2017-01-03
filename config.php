<?php    
        define("APP_DIR","C://wamp/www/rentaboat");

        function __autoload($class){
            if(file_exists(APP_DIR."/classes/".$class.".php")){
                require_once APP_DIR."/classes/".$class.".php";
            }
        }


    
?>