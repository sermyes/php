<?php 
    $id = $_POST["id"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];

    require_once("MYDB.php");
    $pdo = db_connect();

    try{
        $pdo -> beginTransaction(); 
        // 변경사항이 생길때만 적용된다. (select시 필요없음)
        $sql = "update member set password=?, email=?, tel=? where id=?";

        $stmh = $pdo->prepare($sql);

        $stmh -> bindValue(1, $password, PDO::PARAM_STR);
        $stmh -> bindValue(2, $email, PDO::PARAM_STR);
        $stmh -> bindValue(3, $tel, PDO::PARAM_STR);
        $stmh -> bindValue(4, $id, PDO::PARAM_STR);

        $stmh -> execute();
        $pdo -> commit();

        header("Location:http://localhost/inform/list.php");

    }catch(PDOEXception $Exception){
        $pdo->rollback();
        die('오류 : '.$Exception->getMessage());
    }
?> 
