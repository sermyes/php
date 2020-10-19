<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 양식</title>
    <style>
        .link{
            padding: 5px; background-color: #111; color: #fff;
            margin-top: 10px; display: inline-block;
        }
    </style>
</head>
<body>
    <form action="insertPro.php" method="post">
        <table>
            <tbody>
                <tr>
                    <th>아이디</th>
                    <td><input type="text" name="id" placeholder="hongildong" required onfocus></td>
                </tr>
                <tr>
                    <th>비밀번호</th>
                    <td><input type="password" name="password" placeholder="6~16글자" required onfocus></td>
                </tr>
                <tr>
                    <th>이메일</th>
                    <td><input type="text" name="email" placeholder="abc@naver.com" required onfocus></td>
                </tr>
                <tr>
                    <th>전화번호</th>
                    <td><input type="text" name="tel" placeholder="010-1111-1111" required onfocus></td>
                </tr>
                <tr>
                    <th colspan="2">
                        <input type="submit" value="가입하기">
                        <input type="reset" value="재작성">
                    </th>
                </tr>
            </tbody>
        </table>
    </form>
    <a class="link" href="list.php">회원목록</a>
</body> 
</html>
