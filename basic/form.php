<?php
    $title = 'login';
    include_once('inc/header.php');
    require_once('inc/functions.php');
?>

<form action="request.php" method="post">
<!-- <form action="request.php" method="get"> -->
    <p>
        <label for="userName">Name</label>
        <input type="text" name="uName" id="userName">
    </p>
    <p>
        <label for="userEmail">Email</label>
        <input type="email" name="uEmail" id="userEmail">
    </p>
    <p>
        <input type="submit" value="로그인">
    </p>
</form>

<?php
    include('inc/footer.php');
?>