<!DOCTYPE html>
<?php
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
        $sql = "select * from member";
        $stmh = $pdo->query($sql);

        $count = $stmh -> rowCount();
        print "검색결과는 $count 건 입니다.<br/>";

    }catch(PDOEXception $Exception){
        die('오류 : '.$Exception->getMessage());
    }

    if($count < 1){
        print "가입자가 없습니다.<br/>";
    }else{
?>   
    <a class="link" href="insertForm.php">신규추가</a><br/>
    <table>
        <thead>
            <tr>
                <th>아이디</th>
                <th>비밀번호</th>
                <th>이메일</th>
                <th>전화번호</th>
                <th>가입일시</th>
                <th>수정</th>
                <th>삭제</th>
            </tr>
        </thead>
        <tbody>
<?php 
    while($row = $stmh -> fetch(PDO::FETCH_ASSOC)){
?>
            <tr>
                <th><?=$row['id']?></th>
                <th><?=$row['password']?></th>
                <th><?=$row['email']?></th>
                <th><?=$row['tel']?></th>
                <th><?=$row['reg_date']?></th>
                <th><a href="updateForm.php?id=<?=$row['id']?>" target="_blank">수정</a></th>
                <th><a href="delete.php?id=<?=$row['id']?>" target="_blank">삭제</a></th>
            </tr>
<?php
    }
?>
        </tbody>
    </table>      
<?php
    }
?>    
</body>
</html>
