<?php
    class db_connect{

        public static function connect(){
            $paramPath = ROOT. '/config/db_config.php';
            include_once($paramPath);

            $db = new PDO("mysql:host=$host;dbname=$db_name;port=3306", $db_user, $u_pass);

            return $db;
        }
    }