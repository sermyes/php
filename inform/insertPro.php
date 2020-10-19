<?php 
    $id = $_POST["id"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];

    require_once("MYDB.php");
    $pdo = db_connect();

    try{
        $pdo -> beginTransaction(); // 변경사항이 생길때만 적용된다.
        $sql = "insert into member(id, password, email, tel, reg_date) 
            values(?, ?, ?, ?, now())";

        $stmh = $pdo->prepare($sql);

        $stmh -> bindValue(1, $id, PDO::PARAM_STR);
        $stmh -> bindValue(2, $password, PDO::PARAM_STR);
        $stmh -> bindValue(3, $email, PDO::PARAM_STR);
        $stmh -> bindValue(4, $tel, PDO::PARAM_STR);

        $stmh -> execute();
        $pdo -> commit();

        header("Location:http://localhost/inform/list.php");
        
    }catch(PDOEXception $Exception){
        $pdo->rollback();
        die('오류 : '.$Exception->getMessage());
    }
?> 
