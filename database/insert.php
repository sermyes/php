<?php 
    function db_connect(){
        $db_type = "mysql";
        $host = "localhost";
        $db_name = "opentutorials";
        $db_user = "lsh";
        $db_pw = "123456";

        $dsn = "$db_type:host=$host;dbname=$db_name;charset=utf8";

        try{
            $pdo = new PDO($dsn, $db_user, $db_pw);
            $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }catch(PDOException $Exception){
            die('오류 : '.$Exception->getMessage());
        }
        return $pdo;
    }
?>