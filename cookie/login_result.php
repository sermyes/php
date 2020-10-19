
<?php 
    session_start();

    $userid = $_POST["userid"];
    $userpw = $_POST["userpw"];
    
    if($userid == "admin" && $userpw == "123456"){
        if(isset($_POST["ckbox"])){
            setcookie("userid", $userid, time()+60*60*24);
            setcookie("userpw", $userpw, time()+60*60*24);
        }

        $_SESSION["userid"] = $userid; // 로그인이 성공했을 때, 세션변수 생성.
        header("Location:http://localhost/cookie/login_form.php");
        exit;
    }else{
?>

<script>
    alert("아이디와 비밀번호가 다릅니다");
    history.back();
</script> 

<?php
    }
?>   
