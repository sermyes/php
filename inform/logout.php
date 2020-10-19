<?php 
    session_start();

    unset($_SESSION["userid"]);
    unset($_SESSION["userpw"]);

    setcookie("userid","");
    header("Location:http://localhost/inform/login_form.php");
?> 
