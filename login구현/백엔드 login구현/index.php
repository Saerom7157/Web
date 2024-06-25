<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 폼</title>
</head>
<body>
    <h1>회원가입</h1>
    <form method="post" action="register.php">
        <label for="id">아이디:</label>
        <input type="text" name="id" id="id" required placeholder="아이디 입력">
        <br> 
        <label for="pw">비밀번호:</label>
        <input type="password" name="pw" id="pw" required placeholder="비밀번호 입력">
        <br>
        <button type="submit">회원가입</button>
        <a href="login.php">로그인 하기</a>
    </form>
</body>
</html>
