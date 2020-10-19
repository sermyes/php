<!-- 쿠키 & 세션 생성 -->
<?php  
    session_start();

    $a = setcookie("userid", "shlee", time()+60*60*24);
    $b = setcookie("userpw", "123456", time()+60*60*24);
    /* 
    bool setcookie(변수, 값, 지속시간, path, domain, secure); 
    setcookie는 html, head태그 이전에 사용해야한다.
    path = 쿠키를 이용할 수 있는 경로, /는 전체 도메인, /home/ 이라면 home 하위디렉터리만 가능
    domain = example.com으로 설정하면 example.com의 모든 하위 도메인에서 쿠키를 사용가능.
    secure = default는 false값이며, true로 설정하면 사이트에 접속할 때만 쿠키가 설정된다.
    */ 

    print $_SESSION["userid"]."님의 방문을 환영합니다<br>";
    // login_result의 $_SESSION["userid"] 변수를 사용할 수 있다.

    if($a && $b){
        print "쿠키 'userid'와 'userpw' 생성완료 <br>"; 
    }

    // 쿠키삭제 방법
    // $a = setcookie("userid", ""); 값을 공백으로 바꾼다.
?>

 


