<?php 
    session_start();

    unset($_SESSION["userid"]);
    unset($_SESSION["userpw"]);

    setcookie("userid","");
    header("Location:http://localhost/cookie/login_form.php");
?>