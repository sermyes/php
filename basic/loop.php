<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>반복문</title>
</head>
<body>
    <h1>반복문</h1>
    <h2>while</h2>
    <?php 
        $i = 0;
        while($i < 5){
            echo($i++).' ';
        }
    ?>
    <h2>do/while</h2>
    <?php 
        $i = 0;
        do{
            echo($i++).' ';
        }while($i < 5);
    ?>
    <h2>for</h2>
    <?php 
        for($i = 0; $i < 5; $i++){
            echo $i.' ';
        } 
    ?>
    <h2>foreach</h2>
    <?php 
        $result = array(0, 2, 4, 6, 8);
        foreach($result as $number){
            echo $number.' ';
        }
    ?>
    <hr/>
    <?php 
        // 연관배열 foreach
        $scores = array(
            '국어' => 80,
            '영어' => 70,
            '수학' => 100,
            '과학' => 95,
        );
        foreach($scores as $subject => $score){
            // echo $subject.'의 점수는 '.$score.'<br/>';
            echo "\$scores배열 - {$subject}의 값은 {$score} 입니다.<br/>";
        }
        // 큰 따옴표("") 안에서 \$변수 하면 $변수 그대로 출력. {$변수}는 변수의 값을 출력
    ?>
</body>
</html>
