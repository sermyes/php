
<?php 
    $title = 'home'; // $title이 선언된 후에 include되었으므로 title이 에러없이 변경된다.
    include('inc/header.php');
    //! include는 에러 발생 후에도 뒤에 코드 실행, 중복 실행가능(에러 발생x).
    require('inc/functions.php');
    //! require는 에러 발생 시 뒤에코드 실행x, 중복 불가능(중복 실행시 에러발생).
    // include_once('inc/header.php'); 
    // require_once('inc/header.php');
    //! include와 require는 once와 함께 사용하는 것이 좋다.
    
?>
<!-- header include -->

<?php 
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

    output($fruits);
?>
<h2>정적변수</h2>
<?php 
    increment(); 
    increment(); 
    increment();
?> 

<?php 
    include('inc/footer.php');
?>
<!-- footer include -->
