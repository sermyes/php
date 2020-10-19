<?php 
    $id = $_REQUEST["id"];

    require_once("MYDB.php");
    $pdo = db_connect();

    try{
        $pdo -> beginTransaction(); // select를 제외한 모든 경우 해당된다.
        $sql = "delete from member where id=?";

        $stmh = $pdo->prepare($sql);

        $stmh -> bindValue(1, $id, PDO::PARAM_STR);
        
        $stmh -> execute();
        $pdo -> commit();

        header("Location:http://localhost/inform/list.php");
        
    }catch(PDOEXception $Exception){
        die('오류 : '.$Exception->getMessage());
    } 
?>
