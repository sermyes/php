<!DOCTYPE html>
<?php
    $id = $_REQUEST["id"];

    require_once("MYDB.php");
    $pdo = db_connect();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원관리</title>
    <style>
        .link{
            padding: 5px; background-color: #111; color: #fff;
            margin-top: 10px; display: inline-block;
        }
    </style>
</head>
<body>
<?php 
    try{
        $sql = "select * from member where id=?";
        $stmh = $pdo->prepare($sql);
        $stmh -> bindValue(1, $id);
        $stmh -> execute();

        $count = $stmh -> rowCount();

    }catch(PDOEXception $Exception){
        die('오류 : '.$Exception->getMessage());
    }

    if($count < 1){
        print "수정자가 없습니다.<br/>";
    }else{
        $row = $stmh -> fetch(PDO::FETCH_ASSOC);
?>   
    <form action="updatePro.php" method="post">
        <table>
            <tbody>
                <tr>
                    <th>아이디</th>
                    <td><?=$row['id']?></td>
                </tr>
                <tr>
                    <th>비밀번호</th>
                    <td><input type="password" name="password" value="<?=$row['password']?>" required onfocus></td>
                </tr>
                <tr>
                    <th>이메일</th>
                    <td><input type="text" name="email" value="<?=$row['email']?>" required onfocus></td>
                </tr>
                <tr>
                    <th>전화번호</th>
                    <td><input type="text" name="tel" value="<?=$row['tel']?>" required onfocus></td>
                </tr>
                <tr>
                    <th colspan="2">
                        <input type="submit" value="확인">
                    </th>
                </tr>
            </tbody>
        </table>
        <input type="hidden" name="id" value="<?=$id?>">
        <!-- id는 input타입이 아니므로 hidden타입으로 따로 id를 updatePro로 전송해준다. -->
    </form>
<?php
    }
?>
</body>
</html>