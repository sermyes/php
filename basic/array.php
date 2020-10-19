<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
    <h1>array</h1>
    <?php 
        // $배열이름 = array();
        $fruits = array();
        $fruits[0] = 'apple';
        $fruits[1] = 'banana'; 
        $fruits[2] = 'orange';
        
        echo $fruits;

        if(isset($fruits[3])){
            echo $fruits[3];
        }else{
            echo '값이 없습니다';
        }
        // isset(변수명, 변수명) 값이 있으면 true, 없으면 false
    ?>
    <hr/>
    <h2>for 반복문</h2>
    <?php
        for($i = 0; $i < count($fruits); $i++){
            echo $fruits[$i].'<br/>';
        }
    ?>
    <h2>foreach 반복문</h2>
    <?php
        foreach($fruits as $item){
            echo $item.'<br/>';
        }
    ?>
    <h2>associative array</h2>
    <?php 
        $prices = array();
        $prices['apple'] = 1000;
        $prices['banana'] = 2000;
        $prices['orange'] = 3000;
        
        foreach($prices as $key => $price){
            echo $key.' '.$price.'<br/>';
        }
    ?>
</body>
</html>