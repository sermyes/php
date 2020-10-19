<?php 
    if(!isset($title)){
        $title = 'function'; // home.php에서 title이 지정되지 않았을 경우, function으로 대체
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>
<body>
    <h1><?= $title; ?></h1>
    