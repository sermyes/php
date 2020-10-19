<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>조건문</title>
</head>
<body>
    <?php 
        /* 
        $result = 1 < 3; // true 1 , 1 > 3 false 0
        echo $result;
        && = and
        || = or 
        xor = 둘이 다르면 true, 아니면 false
        */
        $first_name = 'dejay';
        $last_name = "kim";
        if($first_name == 'Dejay' xor $last_name == 'kim'){
            echo '조건은 true';
        }else{
            echo '조건은 false';
        }
    ?>
</body>
</html>