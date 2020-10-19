<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>login</title>
</head>
<body>
    <?php 
        if(isset($_COOKIE["userid"])){
            $_SESSION["userid"] = $_COOKIE["userid"];
        }
        if(!isset($_SESSION["userid"])){
    ?>
    
    <form action="login_result.php" method="POST">
        <div>
            <input type="text" name="userid" placeholder="아이디" required autofocus>
        </div>
        <div>
            <input type="password" name="userpw"placeholder="비밀번호" required autofocus>
        </div>
        <div>
            <label for="checkbox">로그인 상태유지</label>
            <input type="checkbox" name="ckbox" id="checkbox" value="checked">
        </div>
        <div>
            <input type="submit" value="로그인">
        </div>
    </form> 
    
    <?php 
        }else{
    ?>
    
        <p><?= $_SESSION["userid"]?>님 환영합니다.</p>
        <a href="logout.php">로그아웃</a>
    
    <?php
        }
    ?>

</body>
</html>
