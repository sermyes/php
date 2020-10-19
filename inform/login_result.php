
<?php 
    session_start();

    $userid = $_POST["userid"];
    $userpw = $_POST["userpw"];
    
    require_once("MYDB.php");
    $pdo = db_connect();
    // database 연결

    try{
        $sql = "select password from member where id=?";
        $stmh = $pdo->prepare($sql);
        $stmh -> bindValue(1, $userid);
        $stmh -> execute();

        $count = $stmh -> rowCount();

    }catch(PDOEXception $Exception){
        die('오류 : '.$Exception->getMessage());
    }

    $row = $stmh -> fetch(PDO::FETCH_ASSOC);

    if($count < 1){
?>

<script>
    alert("아이디가 틀립니다");
    history.back();
</script> 

<?php
    }else if($userpw != $row["password"]){
?>
<script>
    alert("비밀번호가 틀립니다");
    history.back();
</script> 

<?php
    }else{
        if(isset($_POST["ckbox"])){
            setcookie("userid", $userid, time()+60*60*24);
            setcookie("userpw", $userpw, time()+60*60*24);
        }

        $_SESSION["userid"] = $userid; // 로그인이 성공했을 때, 세션변수 생성.
        header("Location:http://localhost/inform/login_form.php");
        exit;
    }
?> 
 
