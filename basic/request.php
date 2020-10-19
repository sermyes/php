<?php
    $title = 'request';
    include_once('inc/header.php');
    require_once('inc/functions.php');
?>

<?php 
    $name = $_POST["uName"];
    $email = $_POST["uEmail"];
    //! post방식 받는 방법 $_POST["name"];
    //? 브라우저 히스토리 캐쉬에 남으며, 위에 상단 주소창에 그 내용이 남겨진다. 
    //? 보안이 취약하며, 주소창에 남겨지므로 길이제한이 있다.

    // $name = $_GET["uName"];
    // $email = $_GET["uEmail"];
    //! get방식 받는 방법 $_GET["name"];
    //? 브라우저 히스토리, 캐쉬에 남지않으며, 상단 주소창에 내용이 남겨지지 않는다. 
    //? 내부적으로 암호화되어서 넘겨지기떄문에 보안이 뛰어나며, 길이제한이 없다.

    echo "{$name}님의 이메일 주소는 {$email}입니다.";
?>

<?php
    include('inc/footer.php');
?>