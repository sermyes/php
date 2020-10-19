<?php 
    function db_connect(){
        $db_user = "lsh";
        $db_pw = "123456";
        $db_host = "localhost";
        $db_name = "phptest";
        $db_type = "mysql";

        $dsn = "$db_type:host=$db_host;dbname=$db_name;charset=utf8";

        try{
            $pdo = new PDO($dsn, $db_user, $db_pw);
            $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            // print "데이터베이스에 접속하였습니다.";
        }catch(PDOException $Exception){
            die('오류 : '.$Exception->getMessage());
        }
        return $pdo;
    }
?> 
