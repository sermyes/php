<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <h1>function</h1>
    <?php 
        function sum($x, $y){
            $result = $x + $y;
            return $result;
        }
        $result = sum(10, 20);
        echo $result;
    ?>
    <h2>배열의 출력</h2>
    <?php 
        $fruits = [
            'apple',
            'banana',
            'orange'
        ];
        print_r($fruits);

        function output($value){
            echo '<pre>';
            print_r($value);
            echo '</pre>';
            // print_r 은 변수 값의 정보를 출력.
            // 앞뒤로 <pre>를 붙여주면 원래 배열 모양 그대로 출력해준다.
        }
        output($fruits);
    ?>
    <h2>지역변수 vs 전역변수</h2>
    <?php 
        function myfunc(){
            $var = 10;
            echo "myfunc {$var} <br/>";
        }
        myfunc();
        echo "{$var} <br/>"; // 출력x. $var는 내부 지역변수이므로 에러. 
    ?>
    <?php
        $var2 = 20;
        function myfunc2(){
            echo "{$var2} <br/>"; // 출력 x

            //! 글로벌 변수 사용1
            global $var2; // 외부 글로벌변수 선언
            echo "{$var2} <br/>";
            
            //! 글로벌 변수 사용2
            echo "{$GLOBALS['var2']} <br/>"; // 글로벌변수 출력
        }
        myfunc2();
    ?>
    <h2>정적변수</h2>
    <?php 
        function increment(){
            static $count = 0; // 정적변수는 메모리에 저장. 
            echo "{$count} ";
            $count++;
        }
        increment(); 
        increment(); // count 초기화 x. 정적변수는 값을 유지한다.
    ?>
</body>
</html>